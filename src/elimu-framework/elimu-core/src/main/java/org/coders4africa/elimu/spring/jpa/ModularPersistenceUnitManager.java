/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.spring.jpa;


import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.orm.jpa.persistenceunit.DefaultPersistenceUnitManager;
import org.springframework.orm.jpa.persistenceunit.MutablePersistenceUnitInfo;

import java.net.URL;


/**
 * An extension to the {@link DefaultPersistenceUnitManager} that is able to
 * merge multiple <tt>persistence.xml</tt> associated to the same persistence unit
 * name.
 * <p/>
 * If a module persistence unit defines managed classes explicitly, only adds the
 * specified classes. If the module persistence unit does not define any managed
 * classes, module scanning is assumed: any entity classes defined in the
 * module holding the persistence unit will be associated to the main one.
 * 
 * @author MSOMDA
 */
public class ModularPersistenceUnitManager extends DefaultPersistenceUnitManager {
    
    private final Logger logger = LoggerFactory.getLogger(ModularPersistenceUnitManager.class);

    private boolean strict = true;
    private String persistenceUnitName = "elimusys-pu";


    @Override
    protected void postProcessPersistenceUnitInfo(MutablePersistenceUnitInfo pui) {
        super.postProcessPersistenceUnitInfo(pui);

        logger.info("Start post processing persistence unit infos");
        // This our template persistence unit that we are post-processing
        // so let's just skip.
        if (isApplicationPersistenceUnit(pui)) {
            logger.debug("pui : \n{}",pui);
            return;
        }

        final MutablePersistenceUnitInfo mainPui = getMainPersistenceUnitInfo(pui);

        if (strict) {
            //treat RootPU as Jar and remove RootPU so its not duplicate
            pui.addJarFileUrl(pui.getPersistenceUnitRootUrl());
            pui.setPersistenceUnitRootUrl(null);
        }

        if (mainPui != null) {
            if (strict) {
                if (logger.isDebugEnabled()) {
                    logger.debug("Merging existing jar file urls " + mainPui.getJarFileUrls() +
                            " to persistence unit [" + pui.getPersistenceUnitName() + "]");
                }
                copyPersistenceUnit(mainPui, pui);
                if (logger.isDebugEnabled()) {
                    logger.debug("Persistence unit[" + pui.getPersistenceUnitName() + "] has now " +
                            "the following jar file urls " + pui.getJarFileUrls() + "");
                }
            } else {
                if (logger.isDebugEnabled()) {
                    logger.debug("Merging information from [" + pui.getPersistenceUnitName() + "] " +
                            "to [" + mainPui.getPersistenceUnitName() + "]");
                }
                mergePersistenceUnit(pui, mainPui);
                if (logger.isDebugEnabled()) {
                    logger.debug("Persistence unit[" + mainPui.getPersistenceUnitName() + "] has now " +
                            "the following jar file urls " + mainPui.getJarFileUrls() + "");
                }
            }
        } else if (!pui.getPersistenceUnitName().equals(persistenceUnitName)) {
            logger.debug("Adding persistence unit [" + pui.getPersistenceUnitName() + "] as is (no merging)");
        }
    }

    /**
     * Specifies if the manager should process the persistence units in strict
     * mode. When enabled, only  the persistence unit that have the exact same
     * names as an existing one are merged. When disabled (the default), if the
     * name of the persistence unit matches the prefix, it is merged with the
     * persistence unit defined by the prefix.
     *
     * @param strict if merging occurs on an exact match or on the prefix only
     */
    public void setStrict(boolean strict) {
        this.strict = strict;
    }

    /**
     * Sets the name of the persistence unit that should be used. If no
     * such persistence unit exists, an exception will be thrown, preventing
     * the factory to be created.
     * <p/>
     * When the <tt>strict</tt> mode is disabled, this name is used to
     * find all matching persistence units based on a prefix. Say for
     * instance that the <tt>persistenceUnitName</tt> to use is
     * <tt>pu</tt>, the following applies:
     * <ul>
     * <li><tt>pu-base</tt> will be merged</li>
     * <li><tt>pufoo</tt> will be merged</li>
     * <li><tt>base-pu</tt> will <b>not</b> be merged</li>
     * </ul>
     * Make sure to configure your entity manager factory to use this
     * name as the persistence unit
     *
     * @param persistenceUnitName the name of the persistence unit to use
     */
    public void setPersistenceUnitName(String persistenceUnitName) {
        this.persistenceUnitName = persistenceUnitName;
    }

    /**
     * Merges a persistence unit to another one. Takes care of handling both
     * managed classes and urls. If the persistence unit has managed classes,
     * only merge these and prevents scanning. If no managed classes are
     * available, add the url of the module for entity scanning.
     *
     * @param from the persistence unit to handle
     * @param to the target (merged) persistence unit
     */
    protected void mergePersistenceUnit(MutablePersistenceUnitInfo from, MutablePersistenceUnitInfo to) {
        if (from.getManagedClassNames().size() != 0) {
            for (String s : from.getManagedClassNames()) {
                if (logger.isDebugEnabled()) {
                    logger.debug("Adding entity [" + s + "]");
                }
                to.addManagedClassName(s);
            }
            if (logger.isDebugEnabled()) {
                logger.debug("Added [" + from.getManagedClassNames().size() + "] managed classes to " +
                        "persistence unit[" + to.getPersistenceUnitName() + "]");
            }
        } else {
            to.addJarFileUrl(from.getPersistenceUnitRootUrl());
            if (logger.isDebugEnabled()) {
                logger.debug("Added [" + from.getPersistenceUnitRootUrl() + "] for entity scanning " +
                        "to persistence unit[" + to.getPersistenceUnitName() + "]");
            }
        }
    }

    /**
     * Copies a persistence unit to another one. Takes care of copying both
     * managed classes and urls.
     *
     * @param from the persistence unit to copy
     * @param to the target (copied) persistence unit
     */
    protected void copyPersistenceUnit(MutablePersistenceUnitInfo from, MutablePersistenceUnitInfo to) {
        // Copy jar file urls
        for (URL url : from.getJarFileUrls()) {
            to.addJarFileUrl(url);
        }
        for (String s : from.getManagedClassNames()) {
            to.addManagedClassName(s);
        }
    }

    /**
     * Specifies whether the specified persistence unit is the template one we
     * use to merge.
     *
     * @param pui the persistence unit to test
     * @return <tt>true</tt> if the persistence unit is the target, template persistence unit
     */
    private boolean isApplicationPersistenceUnit(MutablePersistenceUnitInfo pui) {
        return (!strict && persistenceUnitName.equals(pui.getPersistenceUnitName()));
    }

    /**
     * Returns the main {@link MutablePersistenceUnitInfo} to use, based on the
     * given {@link MutablePersistenceUnitInfo} and the settings of the manager.
     * <p/>
     * In strict mode, returns the declared persistence unit with the specified
     * name. In non strict mode and if the specified <tt>pui</tt> starts with
     * the configured <tt>persistenceUnitName</tt>, returns the template
     * persistence unit info used for the merging.
     *
     * @param pui the persistence unit info to handle
     * @return the persistence unit info to use for the merging
     */
    private MutablePersistenceUnitInfo getMainPersistenceUnitInfo(MutablePersistenceUnitInfo pui) {
        if (strict) {
            return getPersistenceUnitInfo(pui.getPersistenceUnitName());
        } else if (pui.getPersistenceUnitName().startsWith(persistenceUnitName)) {
            // We have a match, retrieve our persistence unit name then
            final MutablePersistenceUnitInfo result = getPersistenceUnitInfo(persistenceUnitName);
            // Sanity check
            if (result == null) {
                throw new IllegalStateException("No persistence unit found with name [" + persistenceUnitName + "] " +
                        "so no merging is possible. It usually means that the bootstrap-persistence.xml has not been " +
                        "included in the list of persistence.xml location(s). Check your configuration as it " +
                        "should be the first in the list!");
            }
            return result;
        }
        // Nothing has been found
        return null;
    }
}
