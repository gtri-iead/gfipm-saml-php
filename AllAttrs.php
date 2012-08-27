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

$GFIPMAttrMap = array(
  "gfipm:2.0:user:LocalId" => "http://gfipm.net/standards/metadata/2.0/user/LocalId.html", 
  "gfipm:2.0:user:GivenName" => "http://gfipm.net/standards/metadata/2.0/user/GivenName.html", 
  "gfipm:2.0:user:SurName" => "http://gfipm.net/standards/metadata/2.0/user/SurName.html", 
  "gfipm:2.0:user:EmailAddressText" => "http://gfipm.net/standards/metadata/2.0/user/EmailAddressText.html", 
  "gfipm:2.0:user:TelephoneNumber" => "http://gfipm.net/standards/metadata/2.0/user/TelephoneNumber.html", 
  "gfipm:2.0:user:SwornLawEnforcementOfficerIndicator" => "http://gfipm.net/standards/metadata/2.0/user/SwornLawEnforcementOfficerIndicator.html", 
  "gfipm:2.0:user:PublicSafetyOfficerIndicator" => "http://gfipm.net/standards/metadata/2.0/user/PublicSafetyOfficerIndicator.html", 
  "gfipm:2.0:user:NCICCertificationIndicator" => "http://gfipm.net/standards/metadata/2.0/user/NCICCertificationIndicator.html", 
  "gfipm:2.0:user:EmployerORI" => "http://gfipm.net/standards/metadata/2.0/user/EmployerORI.html", 
  "gfipm:2.0:user:EmployerName" => "http://gfipm.net/standards/metadata/2.0/user/EmployerName.html", 
  "gfipm:2.0:user:IdentityProviderId" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderId.html", 
  "gfipm:2.0:user:EmployerOrganizationGeneralCategoryCode" => "http://gfipm.net/standards/metadata/2.0/user/EmployerOrganizationGeneralCategoryCode.html", 
  "gfipm:2.0:user:EmployerSubUnitName" => "http://gfipm.net/standards/metadata/2.0/user/EmployerSubUnitName.html", 
  "gfipm:2.0:user:ElectronicAuthenticationAssuranceLevelCode" => "http://gfipm.net/standards/metadata/2.0/user/ElectronicAuthenticationAssuranceLevelCode.html", 
  "gfipm:2.0:user:IdentityProofingAssuranceLevelCode" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProofingAssuranceLevelCode.html", 
  "gfipm:2.0:user:FederationId" => "http://gfipm.net/standards/metadata/2.0/user/FederationId.html", 
  "gfipm:2.0:user:CounterTerrorismDataSelfSearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CounterTerrorismDataSelfSearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalHistoryDataSelfSearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalHistoryDataSelfSearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalInvestigativeDataSelfSearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalInvestigativeDataSelfSearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalIntelligenceDataSelfSearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalIntelligenceDataSelfSearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalJusticeDataSelfSearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalJusticeDataSelfSearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:GovernmentDataSelfSearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/GovernmentDataSelfSearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:28CFRCertificationIndicator" => "http://gfipm.net/standards/metadata/2.0/user/28CFRCertificationIndicator.html", 
  "gfipm:2.0:user:MiddleName" => "http://gfipm.net/standards/metadata/2.0/user/MiddleName.html", 
  "gfipm:2.0:user:FullName" => "http://gfipm.net/standards/metadata/2.0/user/FullName.html", 
  "gfipm:2.0:user:CommonName" => "http://gfipm.net/standards/metadata/2.0/user/CommonName.html", 
  "gfipm:2.0:user:DisplayName" => "http://gfipm.net/standards/metadata/2.0/user/DisplayName.html", 
  "gfipm:2.0:user:NamePrefixText" => "http://gfipm.net/standards/metadata/2.0/user/NamePrefixText.html", 
  "gfipm:2.0:user:NameSuffixText" => "http://gfipm.net/standards/metadata/2.0/user/NameSuffixText.html", 
  "gfipm:2.0:user:FaxNumber" => "http://gfipm.net/standards/metadata/2.0/user/FaxNumber.html", 
  "gfipm:2.0:user:StreetAddressText" => "http://gfipm.net/standards/metadata/2.0/user/StreetAddressText.html", 
  "gfipm:2.0:user:PostOfficeBoxText" => "http://gfipm.net/standards/metadata/2.0/user/PostOfficeBoxText.html", 
  "gfipm:2.0:user:CityName" => "http://gfipm.net/standards/metadata/2.0/user/CityName.html", 
  "gfipm:2.0:user:CountyCode" => "http://gfipm.net/standards/metadata/2.0/user/CountyCode.html", 
  "gfipm:2.0:user:StateCode" => "http://gfipm.net/standards/metadata/2.0/user/StateCode.html", 
  "gfipm:2.0:user:PostalCodeText" => "http://gfipm.net/standards/metadata/2.0/user/PostalCodeText.html", 
  "gfipm:2.0:user:CountryCode" => "http://gfipm.net/standards/metadata/2.0/user/CountryCode.html", 
  "gfipm:2.0:user:TimeZoneText" => "http://gfipm.net/standards/metadata/2.0/user/TimeZoneText.html", 
  "gfipm:2.0:user:SocialSecurityNumber" => "http://gfipm.net/standards/metadata/2.0/user/SocialSecurityNumber.html", 
  "gfipm:2.0:user:DriverLicenseNumber" => "http://gfipm.net/standards/metadata/2.0/user/DriverLicenseNumber.html", 
  "gfipm:2.0:user:PassportId" => "http://gfipm.net/standards/metadata/2.0/user/PassportId.html", 
  "gfipm:2.0:user:PassportCountryCode" => "http://gfipm.net/standards/metadata/2.0/user/PassportCountryCode.html", 
  "gfipm:2.0:user:VisaCategory" => "http://gfipm.net/standards/metadata/2.0/user/VisaCategory.html", 
  "gfipm:2.0:user:VisaNumberText" => "http://gfipm.net/standards/metadata/2.0/user/VisaNumberText.html", 
  "gfipm:2.0:user:BirthDate" => "http://gfipm.net/standards/metadata/2.0/user/BirthDate.html", 
  "gfipm:2.0:user:SexCode" => "http://gfipm.net/standards/metadata/2.0/user/SexCode.html", 
  "gfipm:2.0:user:HeightMeasure" => "http://gfipm.net/standards/metadata/2.0/user/HeightMeasure.html", 
  "gfipm:2.0:user:WeightMeasure" => "http://gfipm.net/standards/metadata/2.0/user/WeightMeasure.html", 
  "gfipm:2.0:user:RaceCode" => "http://gfipm.net/standards/metadata/2.0/user/RaceCode.html", 
  "gfipm:2.0:user:EyeColorCode" => "http://gfipm.net/standards/metadata/2.0/user/EyeColorCode.html", 
  "gfipm:2.0:user:HairColorCode" => "http://gfipm.net/standards/metadata/2.0/user/HairColorCode.html", 
  "gfipm:2.0:user:CitizenshipCode" => "http://gfipm.net/standards/metadata/2.0/user/CitizenshipCode.html", 
  "gfipm:2.0:user:PrimaryLanguageName" => "http://gfipm.net/standards/metadata/2.0/user/PrimaryLanguageName.html", 
  "gfipm:2.0:user:PhotoImage" => "http://gfipm.net/standards/metadata/2.0/user/PhotoImage.html", 
  "gfipm:2.0:user:DigitiedSignatureImage" => "http://gfipm.net/standards/metadata/2.0/user/DigitiedSignatureImage.html", 
  "gfipm:2.0:user:FingerprintSetImage" => "http://gfipm.net/standards/metadata/2.0/user/FingerprintSetImage.html", 
  "gfipm:2.0:user:EmergencyContactFullName" => "http://gfipm.net/standards/metadata/2.0/user/EmergencyContactFullName.html", 
  "gfipm:2.0:user:EmergencyContactTelephoneNumber" => "http://gfipm.net/standards/metadata/2.0/user/EmergencyContactTelephoneNumber.html", 
  "gfipm:2.0:user:EmergencyContactEmailAddressText" => "http://gfipm.net/standards/metadata/2.0/user/EmergencyContactEmailAddressText.html", 
  "gfipm:2.0:user:SecurityClearanceLevelCode" => "http://gfipm.net/standards/metadata/2.0/user/SecurityClearanceLevelCode.html", 
  "gfipm:2.0:user:SecurityClearanceEffectiveDate" => "http://gfipm.net/standards/metadata/2.0/user/SecurityClearanceEffectiveDate.html", 
  "gfipm:2.0:user:SecurityClearanceExpirationDate" => "http://gfipm.net/standards/metadata/2.0/user/SecurityClearanceExpirationDate.html", 
  "gfipm:2.0:user:SecurityClearanceSanctionText" => "http://gfipm.net/standards/metadata/2.0/user/SecurityClearanceSanctionText.html", 
  "gfipm:2.0:user:SecurityClearanceGrantingAgencyName" => "http://gfipm.net/standards/metadata/2.0/user/SecurityClearanceGrantingAgencyName.html", 
  "gfipm:2.0:user:NCICCriminalHistoryPrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/NCICCriminalHistoryPrivilegeIndicator.html", 
  "gfipm:2.0:user:NCICHotfilePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/NCICHotfilePrivilegeIndicator.html", 
  "gfipm:2.0:user:FBIIAFISPrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/FBIIAFISPrivilegeIndicator.html", 
  "gfipm:2.0:user:FBIIIIPrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/FBIIIIPrivilegeIndicator.html", 
  "gfipm:2.0:user:NICSFilePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/NICSFilePrivilegeIndicator.html", 
  "gfipm:2.0:user:NDExPrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/NDExPrivilegeIndicator.html", 
  "gfipm:2.0:user:LEOPrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/LEOPrivilegeIndicator.html", 
  "gfipm:2.0:user:NIPPSectorCode" => "http://gfipm.net/standards/metadata/2.0/user/NIPPSectorCode.html", 
  "gfipm:2.0:user:EmergencySupportFunctionCode" => "http://gfipm.net/standards/metadata/2.0/user/EmergencySupportFunctionCode.html", 
  "gfipm:2.0:user:MilitaryStatusCode" => "http://gfipm.net/standards/metadata/2.0/user/MilitaryStatusCode.html", 
  "gfipm:2.0:user:EmployerOrganizationCategoryCode" => "http://gfipm.net/standards/metadata/2.0/user/EmployerOrganizationCategoryCode.html", 
  "gfipm:2.0:user:EmployerDescriptionText" => "http://gfipm.net/standards/metadata/2.0/user/EmployerDescriptionText.html", 
  "gfipm:2.0:user:EmployerStreetAddressText" => "http://gfipm.net/standards/metadata/2.0/user/EmployerStreetAddressText.html", 
  "gfipm:2.0:user:EmployerPostOfficeBoxText" => "http://gfipm.net/standards/metadata/2.0/user/EmployerPostOfficeBoxText.html", 
  "gfipm:2.0:user:EmployerCityName" => "http://gfipm.net/standards/metadata/2.0/user/EmployerCityName.html", 
  "gfipm:2.0:user:EmployerCountyCode" => "http://gfipm.net/standards/metadata/2.0/user/EmployerCountyCode.html", 
  "gfipm:2.0:user:EmployerStateCode" => "http://gfipm.net/standards/metadata/2.0/user/EmployerStateCode.html", 
  "gfipm:2.0:user:EmployerPostalCodeText" => "http://gfipm.net/standards/metadata/2.0/user/EmployerPostalCodeText.html", 
  "gfipm:2.0:user:EmployerCountryCode" => "http://gfipm.net/standards/metadata/2.0/user/EmployerCountryCode.html", 
  "gfipm:2.0:user:EmployerWebSiteURI" => "http://gfipm.net/standards/metadata/2.0/user/EmployerWebSiteURI.html", 
  "gfipm:2.0:user:EmployeeId" => "http://gfipm.net/standards/metadata/2.0/user/EmployeeId.html", 
  "gfipm:2.0:user:EmployeeOccupationCode" => "http://gfipm.net/standards/metadata/2.0/user/EmployeeOccupationCode.html", 
  "gfipm:2.0:user:EmployeeOccupationCategoryCode" => "http://gfipm.net/standards/metadata/2.0/user/EmployeeOccupationCategoryCode.html", 
  "gfipm:2.0:user:EmployeePositionName" => "http://gfipm.net/standards/metadata/2.0/user/EmployeePositionName.html", 
  "gfipm:2.0:user:EmployeeRankText" => "http://gfipm.net/standards/metadata/2.0/user/EmployeeRankText.html", 
  "gfipm:2.0:user:EmploymentCategoryCode" => "http://gfipm.net/standards/metadata/2.0/user/EmploymentCategoryCode.html", 
  "gfipm:2.0:user:EmploymentSupervisorFullName" => "http://gfipm.net/standards/metadata/2.0/user/EmploymentSupervisorFullName.html", 
  "gfipm:2.0:user:EmploymentSupervisorEmailAddressText" => "http://gfipm.net/standards/metadata/2.0/user/EmploymentSupervisorEmailAddressText.html", 
  "gfipm:2.0:user:EmploymentSupervisorTelephoneNumber" => "http://gfipm.net/standards/metadata/2.0/user/EmploymentSupervisorTelephoneNumber.html", 
  "gfipm:2.0:user:EmploymentSupervisorFaxNumber" => "http://gfipm.net/standards/metadata/2.0/user/EmploymentSupervisorFaxNumber.html", 
  "gfipm:2.0:user:EmploymentManagementLevel" => "http://gfipm.net/standards/metadata/2.0/user/EmploymentManagementLevel.html", 
  "gfipm:2.0:user:EmploymentJurisdiction" => "http://gfipm.net/standards/metadata/2.0/user/EmploymentJurisdiction.html", 
  "gfipm:2.0:user:EmploymentAffiliationCategoryCode" => "http://gfipm.net/standards/metadata/2.0/user/EmploymentAffiliationCategoryCode.html", 
  "gfipm:2.0:user:EmploymentHireDate" => "http://gfipm.net/standards/metadata/2.0/user/EmploymentHireDate.html", 
  "gfipm:2.0:user:AssignmentAgencyName" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAgencyName.html", 
  "gfipm:2.0:user:AssignmentAgencyOrganizationGeneralCategoryCode" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAgencyOrganizationGeneralCategoryCode.html", 
  "gfipm:2.0:user:AssignmentAgencyOrganizationCategoryCode" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAgencyOrganizationCategoryCode.html", 
  "gfipm:2.0:user:AssignmentAgencySubUnitName" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAgencySubUnitName.html", 
  "gfipm:2.0:user:AssignmentAgencyDescriptionText" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAgencyDescriptionText.html", 
  "gfipm:2.0:user:AssignmentAgencyORI" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAgencyORI.html", 
  "gfipm:2.0:user:AssignmentAgencyStreetAddressText" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAgencyStreetAddressText.html", 
  "gfipm:2.0:user:AssignmentAgencyPostOfficeBoxText" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAgencyPostOfficeBoxText.html", 
  "gfipm:2.0:user:AssignmentAgencyCityName" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAgencyCityName.html", 
  "gfipm:2.0:user:AssignmentAgencyCountyCode" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAgencyCountyCode.html", 
  "gfipm:2.0:user:AssignmentAgencyStateCode" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAgencyStateCode.html", 
  "gfipm:2.0:user:AssignmentAgencyPostalCodeText" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAgencyPostalCodeText.html", 
  "gfipm:2.0:user:AssignmentAgencyCountryCode" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAgencyCountryCode.html", 
  "gfipm:2.0:user:AssignmentAgencyWebSiteURI" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAgencyWebSiteURI.html", 
  "gfipm:2.0:user:AssigneePositionName" => "http://gfipm.net/standards/metadata/2.0/user/AssigneePositionName.html", 
  "gfipm:2.0:user:AssignmentStatusCode" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentStatusCode.html", 
  "gfipm:2.0:user:AssignmentSupervisorFullName" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentSupervisorFullName.html", 
  "gfipm:2.0:user:AssignmentSupervisorEmailAddressText" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentSupervisorEmailAddressText.html", 
  "gfipm:2.0:user:AssignmentSupervisorTelephoneNumber" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentSupervisorTelephoneNumber.html", 
  "gfipm:2.0:user:AssignmentSupervisorFaxNumber" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentSupervisorFaxNumber.html", 
  "gfipm:2.0:user:AssignmentAffiliationCategoryCode" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentAffiliationCategoryCode.html", 
  "gfipm:2.0:user:AssignmentStartDate" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentStartDate.html", 
  "gfipm:2.0:user:AssignmentEndDate" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentEndDate.html", 
  "gfipm:2.0:user:AssignmentJurisdiction" => "http://gfipm.net/standards/metadata/2.0/user/AssignmentJurisdiction.html", 
  "gfipm:2.0:user:CounterTerrorismDataSelfSubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CounterTerrorismDataSelfSubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CounterTerrorismDataSelfEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CounterTerrorismDataSelfEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CounterTerrorismDataSelfDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CounterTerrorismDataSelfDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CounterTerrorismDataAgencySearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CounterTerrorismDataAgencySearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CounterTerrorismDataAgencySubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CounterTerrorismDataAgencySubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CounterTerrorismDataAgencyEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CounterTerrorismDataAgencyEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CounterTerrorismDataAgencyDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CounterTerrorismDataAgencyDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalHistoryDataSelfSubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalHistoryDataSelfSubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalHistoryDataSelfEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalHistoryDataSelfEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalHistoryDataSelfDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalHistoryDataSelfDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalHistoryDataAgencySearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalHistoryDataAgencySearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalHistoryDataAgencySubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalHistoryDataAgencySubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalHistoryDataAgencyEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalHistoryDataAgencyEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalHistoryDataAgencyDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalHistoryDataAgencyDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalInvestigativeDataSelfSubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalInvestigativeDataSelfSubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalInvestigativeDataSelfEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalInvestigativeDataSelfEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalInvestigativeDataSelfDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalInvestigativeDataSelfDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalInvestigativeDataAgencySearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalInvestigativeDataAgencySearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalInvestigativeDataAgencySubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalInvestigativeDataAgencySubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalInvestigativeDataAgencyEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalInvestigativeDataAgencyEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalInvestigativeDataAgencyDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalInvestigativeDataAgencyDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalIntelligenceDataSelfSubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalIntelligenceDataSelfSubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalIntelligenceDataSelfEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalIntelligenceDataSelfEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalIntelligenceDataSelfDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalIntelligenceDataSelfDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalIntelligenceDataAgencySearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalIntelligenceDataAgencySearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalIntelligenceDataAgencySubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalIntelligenceDataAgencySubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalIntelligenceDataAgencyEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalIntelligenceDataAgencyEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalIntelligenceDataAgencyDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalIntelligenceDataAgencyDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalJusticeDataSelfSubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalJusticeDataSelfSubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalJusticeDataSelfEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalJusticeDataSelfEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalJusticeDataSelfDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalJusticeDataSelfDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalJusticeDataAgencySearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalJusticeDataAgencySearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalJusticeDataAgencySubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalJusticeDataAgencySubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalJusticeDataAgencyEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalJusticeDataAgencyEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CriminalJusticeDataAgencyDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CriminalJusticeDataAgencyDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:GovernmentDataSelfSubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/GovernmentDataSelfSubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:GovernmentDataSelfEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/GovernmentDataSelfEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:GovernmentDataSelfDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/GovernmentDataSelfDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:GovernmentDataAgencySearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/GovernmentDataAgencySearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:GovernmentDataAgencySubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/GovernmentDataAgencySubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:GovernmentDataAgencyEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/GovernmentDataAgencyEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:GovernmentDataAgencyDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/GovernmentDataAgencyDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:PublicDataSelfSearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/PublicDataSelfSearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:PublicDataSelfSubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/PublicDataSelfSubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:PublicDataSelfEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/PublicDataSelfEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:PublicDataSelfDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/PublicDataSelfDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:PublicDataAgencySearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/PublicDataAgencySearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:PublicDataAgencySubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/PublicDataAgencySubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:PublicDataAgencyEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/PublicDataAgencyEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:PublicDataAgencyDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/PublicDataAgencyDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CommercialDataSelfSearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CommercialDataSelfSearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CommercialDataSelfSubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CommercialDataSelfSubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CommercialDataSelfEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CommercialDataSelfEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CommercialDataSelfDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CommercialDataSelfDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CommercialDataAgencySearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CommercialDataAgencySearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CommercialDataAgencySubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CommercialDataAgencySubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CommercialDataAgencyEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CommercialDataAgencyEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:CommercialDataAgencyDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/CommercialDataAgencyDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:TestDataSelfSearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/TestDataSelfSearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:TestDataSelfSubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/TestDataSelfSubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:TestDataSelfEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/TestDataSelfEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:TestDataSelfDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/TestDataSelfDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:TestDataAgencySearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/TestDataAgencySearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:TestDataAgencySubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/TestDataAgencySubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:TestDataAgencyEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/TestDataAgencyEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:TestDataAgencyDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/TestDataAgencyDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:SubscriberDataSelfSearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/SubscriberDataSelfSearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:SubscriberDataSelfSubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/SubscriberDataSelfSubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:SubscriberDataSelfEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/SubscriberDataSelfEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:SubscriberDataSelfDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/SubscriberDataSelfDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:SubscriberDataAgencySearchHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/SubscriberDataAgencySearchHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:SubscriberDataAgencySubmitHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/SubscriberDataAgencySubmitHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:SubscriberDataAgencyEditHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/SubscriberDataAgencyEditHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:SubscriberDataAgencyDeleteHomePrivilegeIndicator" => "http://gfipm.net/standards/metadata/2.0/user/SubscriberDataAgencyDeleteHomePrivilegeIndicator.html", 
  "gfipm:2.0:user:IdentityProviderOrganizationName" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderOrganizationName.html", 
  "gfipm:2.0:user:IdentityProviderOrganizationStreetAddressText" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderOrganizationStreetAddressText.html", 
  "gfipm:2.0:user:IdentityProviderOrganizationPostOfficeBoxText" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderOrganizationPostOfficeBoxText.html", 
  "gfipm:2.0:user:IdentityProviderOrganizationCityName" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderOrganizationCityName.html", 
  "gfipm:2.0:user:IdentityProviderOrganizationCountyCode" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderOrganizationCountyCode.html", 
  "gfipm:2.0:user:IdentityProviderOrganizationStateCode" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderOrganizationStateCode.html", 
  "gfipm:2.0:user:IdentityProviderOrganizationPostalCodeText" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderOrganizationPostalCodeText.html", 
  "gfipm:2.0:user:IdentityProviderOrganizationCountryCode" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderOrganizationCountryCode.html", 
  "gfipm:2.0:user:IdentityProviderOrganizationWebSiteURI" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderOrganizationWebSiteURI.html", 
  "gfipm:2.0:user:IdentityProviderOrganizationPolicyURI" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderOrganizationPolicyURI.html", 
  "gfipm:2.0:user:IdentityProviderOrganizationPointOfContactFullName" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderOrganizationPointOfContactFullName.html", 
  "gfipm:2.0:user:IdentityProviderOrganizationPointOfContactEmailAddressText" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderOrganizationPointOfContactEmailAddressText.html", 
  "gfipm:2.0:user:IdentityProviderOrganizationPointOfContactTelephoneNumber" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderOrganizationPointOfContactTelephoneNumber.html", 
  "gfipm:2.0:user:IdentityProviderOrganizationPointOfContactFaxNumber" => "http://gfipm.net/standards/metadata/2.0/user/IdentityProviderOrganizationPointOfContactFaxNumber.html", 
  "gfipm:2.0:user:ElectronicIdentityId" => "http://gfipm.net/standards/metadata/2.0/user/ElectronicIdentityId.html", 
  "gfipm:2.0:user:ElectronicIdentityCategoryCode" => "http://gfipm.net/standards/metadata/2.0/user/ElectronicIdentityCategoryCode.html", 
  "gfipm:2.0:user:ElectronicIdentityEffectiveDate" => "http://gfipm.net/standards/metadata/2.0/user/ElectronicIdentityEffectiveDate.html", 
  "gfipm:2.0:user:ElectronicIdentityExpirationDate" => "http://gfipm.net/standards/metadata/2.0/user/ElectronicIdentityExpirationDate.html", 
  "gfipm:2.0:user:ElectronicIdentityStatusCode" => "http://gfipm.net/standards/metadata/2.0/user/ElectronicIdentityStatusCode.html", 
  "gfipm:2.0:user:ElectronicIdentityProofingOriginalDate" => "http://gfipm.net/standards/metadata/2.0/user/ElectronicIdentityProofingOriginalDate.html", 
  "gfipm:2.0:user:ElectronicIdentityProofingLatestDate" => "http://gfipm.net/standards/metadata/2.0/user/ElectronicIdentityProofingLatestDate.html", 
  "gfipm:2.0:user:ElectronicIdentityAuthenticationCertificate" => "http://gfipm.net/standards/metadata/2.0/user/ElectronicIdentityAuthenticationCertificate.html", 
  "gfipm:2.0:user:ElectronicIdentityCommentText" => "http://gfipm.net/standards/metadata/2.0/user/ElectronicIdentityCommentText.html", 
  "gfipm:2.0:user:ElectronicIdentityWarningNoticeText" => "http://gfipm.net/standards/metadata/2.0/user/ElectronicIdentityWarningNoticeText.html", 
);

  $AssertionURL = $_SERVER["Shib-Assertion-01"];
  if ( $_REQUEST["zygfile"] )
  {
    $zygfile = $_REQUEST["zygfile"];
    $filename = "http://localhost/tmp/" . $zygfile;
    echo "<!-- zyg = $filename -->\n";
    $Content = file_get_contents ($filename);
  }
  else
  {
    $Content = file_get_contents ($AssertionURL);
  }
?>

</head>

<body>
    <div class="document">

    <div id="header"></div>
    <div id="nav_bar">
      <ul>
        <li><a href="index.php">GFIPM Attribute Value Information</a></li>
        <li><a href="../LogView.php">Logs</a></li>
        <li><a href="ShibEnv.php">All Headers</a></li>
        <li><a href="/Shibboleth.sso/Logout">Logout</a>
      </ul>
    </div>
    <div id="main">

<h1>GFIPM Reference Service Provider</h1>

<p>
 The following is a list of all SAML attributes that were transmitted to the GFIPM Reference Service Provider.  Any attribute names or name formats that do not comply with the <a href="http://gfipm.net/standards/metadata/2.0/">GFIPM Metadata Standard</a> will be <span style="background-color: #FFA6A6">highlighted in red</span>.  The attribute values are not validated at this point; please see the main <a href="index.php">GFIPM Reference Service Provider</a> which validates all attribute values that have strict value conformance requirements (most GFIPM Attribute values are not constrained and may contain any valid XML string).  
</p>

<?php
  $SAMLDOM = new DOMDocument();
  if (!$SAMLDOM->loadXML($Content))
  {
    echo "<center><font color=red><h2>No SAML Assertion Found</h2></font></center>\n";
  }
  else
  {
    $xpath = new DOMXPath ($SAMLDOM);
    $xpath->registerNamespace("saml2", "urn:oasis:names:tc:SAML:2.0:assertion");
    $Nodes = $xpath->query ("//saml2:Assertion/saml2:AttributeStatement/saml2:Attribute");
    if ($Nodes->length == 0)
    {
      echo "<center><font color=red><h2>No SAML Attributes Found</h2></font></center>\n";
    }
    else
    {
?>

<table class="GFIPM" cellspacing="5">
<tr><th class="HEADER"colspan=3>All SAML Attributes</th></tr>
 <tr class="GFIPM">
  <th width="25%" class="GFIPM">Attribute Name</th>
  <th width="35%" class="GFIPM">Attribute Name Format</th>
  <th width="40%" class="GFIPM">Attribute Value <br> <small>Not validated</small></th>
 </tr>
<?php
       for ($i = 0; $i < $Nodes->length; $i++)
       {
         $AttributeName  = $Nodes->item($i)->attributes->getNamedItem("Name")->nodeValue;
         $NameFormat     = $Nodes->item($i)->attributes->getNamedItem("NameFormat")->nodeValue;
         $AttributeValue = $Nodes->item($i)->firstChild->textContent; 

         echo "<tr class=\"GFIPM\">\n";
         if ( $GFIPMAttrMap[$AttributeName] )
         {
           $URL = $GFIPMAttrMap[$AttributeName];
           echo " <td class=\"GFIPMLINK\"><a href=\"$URL\">$AttributeName</a></td>\n";
         }
         else // This is not a recognized GFIPM Attribute...
         {
           echo " <td class=\"BAD\">$AttributeName</td>\n";
         }

         if ( $NameFormat === "urn:oasis:names:tc:SAML:2.0:attrname-format:uri" )
         {
           echo " <td class=\"GFIPM\"><img src=\"check.jpg\"/></td>\n";
         }
         else
         {
           echo " <td class=\"BAD\">$NameFormat</td>\n";
         }
         echo " <td class=\"GFIPM\">$AttributeValue</td>\n";
         echo "</tr>\n";
       }
 ?>
</table>
<table>
<tr><th class="HEADER"colspan=2>Color Reference</th></tr>
 <tr class="GFIPM">
  <th class="GFIPM">Cell Shading</th>
  <th class="GFIPM" colspan=2>Meaning</th>
 </tr>
<tr class="GFIPM">
 <td class="GFIPM"> &nbsp; &nbsp;
 <td colspan=2>A valid attribute name was found.  
</tr>
<tr class="GFIPM">
 <td class="GFIPM"> <img src="check.jpg"/>
 <td colspan=2>A valid attribute name format was found. 
</tr>
<tr class="GFIPM">
 <td class="BAD"> &nbsp; &nbsp;
 <td colspan=2>An invalid attribute name or name format was asserted.  You can review the full GFIPM Attribute set <a href="http://www.gfipm.net/standards/metadata/2.0/index.html">here</a>.  <br>All GFIPM Attributes use the SAML NameFormat: <span style="background-color: #cccccc; font-family: courier">urn:oasis:names:tc:SAML:2.0:attrname-format:uri</span>.
</tr>
</table>
<?php
    }
  }
 ?>

</div>
    <div id="footer">
       <a href="index.php">GFIPM Attribute Value Information</a></li>
       | <a href="../LogView.php">Logs</a></li>
       | <a href="ShibEnv.php">HTTP Headers</a></li>
        | <a href="/Shibboleth.sso/Logout">Logout</a>
    </div>
</div>
</body>
</html>
