
package org.coders4africa.elimu.jaxb;

import javax.xml.bind.DatatypeConverter;
import javax.xml.bind.annotation.adapters.XmlAdapter;

/**
 * To override XmlID have to be a string value
 * @author Martial SOMDA
 * @since 1.0
 */
public class IDAdapter extends XmlAdapter<String, Long> {

    @Override
    public Long unmarshal(String stringValue) throws Exception {
        return DatatypeConverter.parseLong(stringValue);
    }

    @Override
    public String marshal(Long longValue) throws Exception {
        return DatatypeConverter.printLong(longValue);
    }
    
}
