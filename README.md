gfipm-saml-php
==============

Some basic php for parsing and validating GFIPM SAML Assertions.
 
   - AllAttrs.php - This uses Shibboleth's feature to read the entire SAML Assertion, and then it 
                    parses out all attributes via xpath.  It compares those attribute names against
                    the GFIPM Standard and outputs some basic information about the attributes.

   - GFIPMAssertion2.0.3.php - This older php utility looks at a subset of GFIPM attributes (specifically
                               the NIEF Profile) and validates attribute values.  It will ignore invalid
                               attribute names.

Using both of these utilities is a good idea for new systems as one helps insure attribute names 
and name formats are consistent with GFIPM the standards, while the other inspects attribute values 
and provides some perspective on NIEF.

