/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package org.coders4africa.elimu.service.school.impl;

import javax.interceptor.AroundInvoke;
import javax.interceptor.InvocationContext;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

/**
 *
 * @author MSOMDA
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
