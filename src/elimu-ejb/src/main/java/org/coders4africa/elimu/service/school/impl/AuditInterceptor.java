/*
 * #%L
 * elimu-ejb
 * 
 * $Id$
 * $HeadURL$
 * %%
 * Copyright (C) 2012 Coders4Africa
 * %%
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as
 * published by the Free Software Foundation, either version 3 of the 
 * License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public 
 * License along with this program.  If not, see
 * <http://www.gnu.org/licenses/gpl-3.0.html>.
 * #L%
 */

package org.coders4africa.elimu.service.school.impl;

import javax.interceptor.AroundInvoke;
import javax.interceptor.InvocationContext;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

/**
 * Intercepts calls to EJB implementations of Elimu services and logs 
 * input parameters, time elapsed between start and end of calls returned values etc.
 * 
 * @author Martial SOMDA
 * @since 1.0
 */
public class AuditInterceptor {

    private Logger logger = LoggerFactory.getLogger(getClass());

    @AroundInvoke
    public Object audit(InvocationContext ic) throws Throwable {

        final String context = ic.getMethod().toGenericString();

        logger.debug("entering " + context);
        long startTime = System.currentTimeMillis();
        try {

            if (null != ic.getParameters() && logger.isTraceEnabled()) {
                StringBuilder builder = new StringBuilder();
                builder.append("given parameters, params=\n");
                for (Object param : ic.getParameters()) {
                    builder.append(param).append("\n");
                }
                logger.trace(builder.toString());
            }

            final Object result = ic.proceed();
            logger.debug("return value, rval=" + context);
            return result;

        } catch (Exception ex) {
            logger.error("exception in " + context, ex);

            throw ex;
        } finally {
            logger.debug("exiting " + context);
            logger.debug("elapsed time " + (System.currentTimeMillis() - startTime) + " msecs.");
        }
    }
}
