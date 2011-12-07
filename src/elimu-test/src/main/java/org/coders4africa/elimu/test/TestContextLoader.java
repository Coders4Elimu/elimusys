/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.test;

import org.springframework.beans.factory.support.DefaultListableBeanFactory;
import org.springframework.test.context.support.GenericXmlContextLoader;


/**
 *
 * @author MSOMDA
 */
public class TestContextLoader  extends GenericXmlContextLoader{

    @Override
    protected void customizeBeanFactory(DefaultListableBeanFactory beanFactory) {
        super.customizeBeanFactory(beanFactory);
        
        beanFactory.setAllowBeanDefinitionOverriding(true);
        beanFactory.setAllowCircularReferences(false);
        beanFactory.setAllowEagerClassLoading(false);
    }
    
    
}
