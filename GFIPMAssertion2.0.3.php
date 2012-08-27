<!--
   Copyright 2012 Georgia Tech Research Institute

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
-->
<html>
<head>
<title>GFIPM Assertion</title>
<LINK href="/css/new_style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-20577917-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

<?php

  // Debug Info 
  echo "\n<!-- PHP DEBUG INFO\n";

  // GLOBALS
  $FedId     = "Failed to Parse or Not Present";
  $FirstName = "Failed to Parse or Not Present";
  $SurName   = "Failed to Parse or Not Present";
  $SLEO      = "Failed to Parse or Not Present";
  $PSO       = "Failed to Parse or Not Present";
  $CFRCert   = "Failed to Parse or Not Present";
  $NCICCert  = "Failed to Parse or Not Present";
  $Phone     = "Failed to Parse or Not Present";
  $Email     = "Failed to Parse or Not Present";
  $Org       = "Failed to Parse or Not Present";
  $IDPName   = "Failed to Parse or Not Present";
  $IDLevel   = "Failed to Parse or Not Present";
  $AssLevel  = "Failed to Parse or Not Present";
  $ORI       = "Failed to Parse or Not Present";
  $GovLevel  = "Failed to Parse or Not Present";
  $LocalId   = "Failed to Parse or Not Present";
  $UnitName  = "Failed to Parse or Not Present";
  $NDEX      = "Failed to Parse or Not Present";

  // Privileges
  $Privileges['CounterTerrorism']      = "Failed to Parse or Not Present";
  $Privileges['CriminalHistory']       = "Failed to Parse or Not Present";
  $Privileges['CriminalInvestigative'] = "Failed to Parse or Not Present";
  $Privileges['CriminalJustice']       = "Failed to Parse or Not Present";
  $Privileges['Government']            = "Failed to Parse or Not Present";
  $Privileges['CriminalIntelligence']  = "Failed to Parse or Not Present";

  // Code Tables
  $OrgCodeTable = array ("Federal Government", "Foreign Government", "Local Government", 
                   "Private Industry", "State Government", "Tribal Government" );
  $NISTCodeTable = array ("NISTLEVEL1", "NISTLEVEL2", "NISTLEVEL3", "NISTLEVEL4");

  function PrintCodeTable ($AttrValue, $CodeTable)
  {
    if ( $AttrValue === "Failed to Parse or Not Present" )
      echo "<td class=\"BAD\">$AttrValue \n";
    else
    {
      $ValidCode = false;
      foreach ($CodeTable as $Code)
      {
        if ($AttrValue === $Code)
          $ValidCode = true;
      }
      if ( $ValidCode )
      {
           echo "<td class=\"GOOD\">$AttrValue\n";
      }
      else
      {
         echo "<td class=\"PROBLEM\">$AttrValue <br> This value does not conform\n";
      }
    }
  }
  

  // Table Cell Print Routine for IDs
  function PrintId ($ID)
  {
    if ( $ID == "Failed to Parse or Not Present" )
      echo "<td class=\"BAD\">$ID \n";
    else
    {
      list ($Fed, $EntityType, $Rest) = split (":", $ID, 3);
      if ( ($Fed === "GFIPM") || ($Fed === "NIEF") )
      {
        if ($EntityType === "IDP")
        {
           echo "<td class=\"GOOD\">$ID\n";
        }
        else if ($EntityType === "TIB")
        {
           list ($TIBName, $EntityType, $UserId) = split (":", $Rest, 3);
           if ($EntityType === "IDP")
           {
             echo "<td class=\"GOOD\">$ID\n";
           }
           else
           {
             echo "<td class=\"PROBLEM\">$ID <br> This ID does not conform\n";
           }
        }
        else
        {
           echo "<td class=\"PROBLEM\">$ID <br> This ID does not conform\n";
        }
      }
      else
      {
        echo "<td class=\"PROBLEM\">$ID <br> This ID does not conform\n";
      }
    }
  }


  // Table Cell Print Routine for Values
  function PrintVal ($Val, $BoolType)
  {
    if ( $Val == "Failed to Parse or Not Present" )
      echo "<td class=\"BAD\">$Val \n";
    else
    {
      if ($BoolType)
      {
        if ( (strcmp($Val,"true")  == 0) || 
             (strcmp($Val,"false") == 0) || 
             (strcmp($Val,"1")     == 0) ||
             (strcmp($Val,"0")     == 0) )
        {
          //Validate $Val is true, false, 0, 1
          echo "<td class=\"GOOD\">$Val\n";
        }
        else
        {
          echo "<td class=\"PROBLEM\">$Val found, true,false,0,1 are the only legal values\n";
        }
      }
      else
      {
        echo "<td class=\"GOOD\">$Val \n";
      }
    }
  }

  // Mapping of Header/Environment Variables into Local Variables.
  // These header names have to be updated if the GFIPM Attribute mapping file changes
  if ( $_SERVER["GfipmSubUnit"] )
  {
    $UnitName = $_SERVER["GfipmSubUnit"];
  }
  if ( $_SERVER["GfipmSLEO"] || $_SERVER["GfipmSLEO"] === "0" )
  {
    $SLEO = $_SERVER["GfipmSLEO"];
  }
  if ( $_SERVER["GfipmTelephoneNumber"] )
  {
    $Phone = $_SERVER["GfipmTelephoneNumber"];
  }
  if ( $_SERVER["GfipmPSO"] || $_SERVER["GfipmEmployerORI"] === "0" )
  {
    $PSO = $_SERVER["GfipmPSO"];
  }
  if ( $_SERVER["GfipmEmployerORI"] || $_SERVER["GfipmEmployerORI"] === "0" )
  {
    $ORI = $_SERVER["GfipmEmployerORI"];
  }
  if ( $_SERVER["GfipmLocalId"] )
  {
    $LocalId = $_SERVER["GfipmLocalId"];
  }
  if ( $_SERVER["GfipmNDExPrivilegeIndicator"] )
  {
    $NDEX = $_SERVER["GfipmNDExPrivilegeIndicator"];
  }
  if ( $_SERVER["GfipmIdentityProviderID"] )
  {
    $IDPName = $_SERVER["GfipmIdentityProviderID"];
  }
  if ( $_SERVER["GfipmSurName"] )
  {
    $SurName = $_SERVER["GfipmSurName"];
  }
  if ( $_SERVER["GfipmGivenName"] )
  {
    $FirstName = $_SERVER["GfipmGivenName"];
  }
  if ( $_SERVER["GfipmFederationId"] )
  {
    $FedId = $_SERVER["GfipmFederationId"];
  }
  if ( $_SERVER["GfipmEmployerName"] )
  {
    $Org = $_SERVER["GfipmEmployerName"];
  }
  if ( $_SERVER["GfipmEmployerGeneralCategoryCode"] )
  {
    $GovLevel = $_SERVER["GfipmEmployerGeneralCategoryCode"];
  }
  if ( $_SERVER["GfipmEmailAddress"] || $_SERVER["GfipmEmailAddress"] === "0" )
  {
    $Email = $_SERVER["GfipmEmailAddress"];
  }
  if ( $_SERVER["GfipmAuthenticationAssuranceLevel"] || $_SERVER["GfipmAuthenticationAssuranceLevel"] === "0" )
  {
    $AssLevel = $_SERVER["GfipmAuthenticationAssuranceLevel"];
  }
  if ( $_SERVER["GfipmNCICCriminalHistoryCertification"] || $_SERVER["GfipmNCICCriminalHistoryCertification"] === "0" )
  {
    $NCICCert = $_SERVER["GfipmNCICCriminalHistoryCertification"];
  }
  if ( $_SERVER["Gfipm28CFRCertPrivilege"] || $_SERVER["Gfipm28CFRCertPrivilege"] === "0" )
  {
    $CFRCert = $_SERVER["Gfipm28CFRCertPrivilege"];
  }
  if ( $_SERVER["GfipmIdentityProofingLevel"] || $_SERVER["GfipmIdentityProofingLevel"] === "0" )
  {
    $IDLevel = $_SERVER["GfipmIdentityProofingLevel"];
  }

  foreach ($Privileges as $PrivName => $Priv)
  {
      $EnvVariable = "Gfipm" . $PrivName . "Privilege";

      echo "Checking Privilege $EnvVariable \n";

      if ( $_SERVER["$EnvVariable"] || $_SERVER["$EnvVariable"] === "0" )
      {
         $Privileges[$PrivName] = $_SERVER["$EnvVariable"];
      }
  }


     echo "   FedId = $FedId\n";
     echo "   Name  = $FirstName $SurName\n";
     echo "   SLEO  = $SLEO\n";
     echo "   PSO   = $PSO \n";
     echo "   28CFR = $CFRCert\n";
     echo "   NCIC  = $NCICCert\n";
     echo "   Org   = $Org\n";
     echo "   Unit  = $UnitName\n";
     echo "   Phone = $Phone\n";
     echo "   Email = $Email\n";
     echo "   IDP   = $IDPName\n";
     echo "   ID    = $IDLevel\n";
     echo "   Ass   = $AssLevel\n";
     echo "   GovL  = $GovLevel\n";
     $CT  = $Privileges['CounterTerrorism'];
     $CH  = $Privileges['CriminalHistory'];
     $CI  = $Privileges['CriminalInvestigative'];
     $CJ  = $Privileges['CriminalJustice'];
     $Gov = $Privileges['Government'];
     echo "   Priv[CT]  = $CT \n";
     echo "   Priv[CH]  = $CH \n";
     echo "   Priv[CI]  = $CI \n";
     echo "   Priv[CJ]  = $CJ \n";
     echo "   Priv[Gov] = $Gov \n";
     echo "   Contact Indicator = $Ind\n";
     echo "   Identification Status = $IdStat\n";

  // Get the Raw SAML Assertion and Dump it for download.
  $tmpname = tempnam("/var/www/html/tmp", "saml_");
  $tmpname .= ".xml";

  $out = fopen($tmpname, "w");
  $AssertionURL = $_SERVER["Shib-Assertion-01"];
  $Content = file_get_contents ($AssertionURL);

  $SamlFilename = "/tmp/" . basename ($tmpname);

     echo "Assertion URL = $AssertionURL";
     echo "Assertion Contents = $Content";
     echo "\nEND DEBUG INFO-->\n";

  fwrite ($out, $Content);
  fclose ($out);

  if ($_SERVER["Shib-Assertion-Count"] === "02")
  {
    $tmpname = tempnam("/var/www/html/tmp", "saml_");
    $tmpname .= ".xml";

    $out = fopen($tmpname, "w");
    $AssertionURL = $_SERVER["Shib-Assertion-02"];
    $Content = file_get_contents ($AssertionURL);

    $Saml2Filename = "/tmp/" . basename ($tmpname);

    fwrite ($out, $Content);
    fclose ($out);
  }


 ?>
</head>

<body>
    <div class="document">

    <div id="header"></div>
    <div id="nav_bar">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="AllAttrs.php">SAML Attributes</a>
        <li><a href="../LogView.php">Logs</a></li>
<!--        <li><a href="ShibEnv.php">Headers</a></li> -->
        <li>
<?php 
   echo "<a href=\"$SamlFilename\">Raw SAML Assertion</a>"; 
   if ($_SERVER["Shib-Assertion-Count"] === "02")
   {
     echo " (<a href=\"$Saml2Filename\">Part 2</a>) \n";
   }
?>
        <li><a href="/Shibboleth.sso/Logout">Logout</a>
      </ul>
    </div>
    <div id="main">

<h1>GFIPM Reference Service Provider</h1>

<p>
 <b><font color=green>Congratulations</font></b> - By getting to this page, SAML Interoperability has been verified.  Use the capabilities of this page to validate/test GFIPM Attribute Conformance and to review the raw SAML as needed.
</p>

<table class="GFIPM" cellspacing="5">
<tr><th class="HEADER"colspan=3>User Identification</th></tr>
 <tr class="GFIPM">
  <th width="25%" class="GFIPM">GFIPM Attribute</th>
  <th width="15%" class="GFIPM">Value</th>
  <th width="60%" class="GFIPM">NIEF Usage</th>
 </tr>
 <tr class="GFIPM">
  <td class="GFIPMLINK"><a href="http://gfipm.net/standards/metadata/2.0/user/GivenName.html">Given Name</a>
  <?php PrintVal ($FirstName, false); ?>
  <td class="GFIPM">This is a mandatory NIEF attribute needed for adequate audit logging.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPMLINK"><a href="http://gfipm.net/standards/metadata/2.0/user/SurName.html">Sur Name</a>
  <?php PrintVal ($SurName, false); ?>
  <td class="GFIPM">This is a mandatory NIEF attribute needed for adequate audit logging.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPMLINK"><a href="http://gfipm.net/standards/metadata/2.0/user/FederationId.html">Federation Id</a>
  <?php PrintId ($FedId); ?>
  <td class="GFIPM">This is a mandatory NIEF attribute needed for adequate audit logging.
 </tr>

<tr><th class="HEADER"colspan=3>User Contact Information</th></tr>

 <tr class="GFIPM">
  <th width="25%" class="GFIPM">GFIPM Attribute</th>
  <th width="15%" class="GFIPM">Value</th>
  <th width="60%" class="GFIPM">NIEF Usage</th>
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/TelephoneNumber.html">Telephone Number</a>
  <?php PrintVal ($Phone, false); ?>
  <td class="GFIPM">This is a mandatory NIEF attribute needed for adequate audit logging.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/EmailAddressText.html">Email Address Text</a>
  <?php PrintVal ($Email, false); ?>
  <td class="GFIPM">This is a mandatory NIEF attribute needed for adequate audit logging.
 </tr>

<tr><th class="HEADER"colspan=3>User Certifications and Memberships</th></tr>

 <tr class="GFIPM">
  <th width="25%" class="GFIPM">GFIPM Attribute</th>
  <th width="15%" class="GFIPM">Value</th>
  <th width="60%" class="GFIPM">NIEF Usage</th>
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/SwornLawEnforcementOfficerIndicator.html">Sworn Law Enforcement Officer Indicator</a>
  <?php PrintVal ($SLEO, true); ?>
  <td class="GFIPM">This is a highly recommended attribute within NIEF as many resources use it within their access control policies.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/PublicSafetyOfficerIndicator.html">Public Safety Officer Indicator</a>
  <?php PrintVal ($PSO, true); ?>
  <td class="GFIPM">This is a highly recommended attribute within NIEF as many resources use it within their access control policies.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/28CFRCertificationIndicator.html">28CFR Certification Indicator</a>
  <?php PrintVal ($CFRCert, true); ?>
  <td class="GFIPM">This is a highly recommended attribute within NIEF as many resources use it within their access control policies.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/NCICCertificationIndicator.html">NCIC Certification Indicator</a>
  <?php PrintVal ($NCICCert, true); ?>
  <td class="GFIPM">This is a recommended attribute within NIEF, and should be asserted if practical.
 </tr>

<tr><th class="HEADER"colspan=3>User Organization Attributes</th></tr>
 
 <tr class="GFIPM">
  <th width="25%" class="GFIPM">GFIPM Attribute</th>
  <th width="15%" class="GFIPM">Value</th>
  <th width="60%" class="GFIPM">NIEF Usage</th>
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/EmployerName.html">Employer Name</a>
  <?php PrintVal ($Org, false); ?>
  <td class="GFIPM">This is a mandatory NIEF attribute needed for adequate audit logging.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/EmployerOrganizationGeneralCategoryCode.html">Employer Organization General Category Code</a>
  <?php PrintCodeTable ($GovLevel, $OrgCodeTable); ?>
  <td class="GFIPM">This is a highly recommended attribute within NIEF as many resources use it within their access control policies.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/EmployerORI.html">Employer ORI</a>
  <?php PrintVal ($ORI, false); ?>
  <td class="GFIPM">This is a highly recommended attribute within NIEF as many resources use it within their access control policies.
 </tr>

<tr><th class="HEADER"colspan=3>User Authorization Attributes / Home Data Privileges</th></tr>

 <tr class="GFIPM">
  <th width="25%" class="GFIPM">Privilege Name</th>
  <th width="15%" class="GFIPM">Value</th>
  <th width="60%" class="GFIPM">NIEF Usage</th>
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/NDExPrivilegeIndicator.html">NDEx Privilege</a>
  <?php PrintVal ($NDEX, true); ?>
  <td class="GFIPM">NIEF recommends this attribute be asserted if possible.  It is used by FBI's NDEX for access.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/CounterTerrorismDataSelfSearchHomePrivilegeIndicator.html">Counter Terrorism Data Privilege </a>
  <?php PrintVal ($Privileges['CounterTerrorism'], true); ?>
  <td class="GFIPM">NIEF recommends this attribute be asserted if possible.  It is used by some resources for access.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/CriminalHistoryDataSelfSearchHomePrivilegeIndicator.html">Criminal History Data Privilege</a>
  <?php PrintVal ($Privileges['CriminalHistory'], true); ?>
  <td class="GFIPM">NIEF recommends this attribute be asserted if possible.  It is used by some resources for access.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/CriminalInvestigativeDataSelfSearchHomePrivilegeIndicator.html">Criminal Investigative Data Privilege</a>
  <?php PrintVal ($Privileges['CriminalInvestigative'], true); ?>
  <td class="GFIPM">NIEF recommends this attribute be asserted if possible.  It is used by some resources for access.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/CriminalJusticeDataSelfSearchHomePrivilegeIndicator.html">Criminal Justice Data Privilege</a>
  <?php PrintVal ($Privileges['CriminalJustice'], true); ?>
  <td class="GFIPM">NIEF recommends this attribute be asserted if possible.  It is used by some resources for access.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/GovernmentDataSelfSearchHomePrivilegeIndicator.html">Government Data Privilege</a>
  <?php PrintVal ($Privileges['Government'], true); ?>
  <td class="GFIPM">NIEF recommends this attribute be asserted if possible.  It is used by some resources for access.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/CriminalIntelligenceDataSelfSearchHomePrivilegeIndicator.html">Criminal Intelligence Data Privilege</a>
  <?php PrintVal ($Privileges['CriminalIntelligence'], true); ?>
  <td class="GFIPM">NIEF recommends this attribute be asserted if possible.  It is used by some resources for access.
 </tr>

<tr><th class="HEADER"colspan=3>Electronic Identification</th></tr>
 
 <tr class="GFIPM">
  <th width="25%" class="GFIPM">GFIPM Attribute</th>
  <th width="15%" class="GFIPM">Value</th>
  <th width="60%" class="GFIPM">NIEF Usage</th>
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/IdentityProviderId.html">Identity Provider Id</a>
  <?php PrintId ($IDPName); ?>
  <td class="GFIPM">This is a mandatory NIEF attribute needed for adequate audit logging.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/ElectronicAuthenticationAssuranceLevelCode.html">Electronic Authentication Assurance Level Code</a>
  <?php PrintCodeTable ($AssLevel, $NISTCodeTable); ?>
  <td class="GFIPM">This is a highly recommended attribute within NIEF as many resources use it within their access control policies.
 </tr>
 <tr class="GFIPM">
  <td class="GFIPM"><a href="http://gfipm.net/standards/metadata/2.0/user/IdentityProofingAssuranceLevelCode.html">Identity Proofing Assurance Level Code</a>
  <?php PrintCodeTable ($IDLevel, $NISTCodeTable); ?>
  <td class="GFIPM">This is a highly recommended attribute within NIEF as many resources use it within their access control policies.
 </tr>

<tr><th class="HEADER"colspan=2>Reference</th></tr>
 <tr class="GFIPM">
  <th class="GFIPM">Value</th>
  <th class="GFIPM" colspan=2>Meaning</th>
 </tr>
<tr class="GFIPM">
 <td class="GOOD"> &nbsp; &nbsp;
 <td colspan=2>A valid attribute value was found (not necessarily a value that would grant access to a resource).
</tr>
<tr class="GFIPM">
 <td class="BAD"> &nbsp; &nbsp;
 <td colspan=2>No attribute value was found in the assertion.  This is only an error if that value should have been transmitted.
</tr>
<tr class="GFIPM">
 <td class="PROBLEM"> &nbsp; &nbsp;
 <td colspan=2>An invalid value was found asserted.  Please review the GFIPM Metadata Standard for why this value is considered invalid.
</tr>

</table>



</div>
    <div id="footer">
       <a href="/">Home</a></li>
       | <a href="AllAttrs.php">SAML Attributes</a>
       | <a href="../LogView.php">Logs</a></li>
<!--       | <a href="ShibEnv.php">Headers</a></li> -->
       | 
<?php 
   echo "<a href=\"$SamlFilename\">Raw SAML Assertion</a>"; 
   if ($_SERVER["Shib-Assertion-Count"] === "02")
   {
     echo " (<a href=\"$Saml2Filename\">Part 2</a>) \n";
   }
?>
        | <a href="/Shibboleth.sso/Logout">Logout</a>
    </div>
</div>
</body>
</html>
