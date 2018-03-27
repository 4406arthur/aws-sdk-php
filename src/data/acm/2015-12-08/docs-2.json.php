<?php
// This file was auto-generated from sdk-root/src/data/acm/2015-12-08/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>AWS Certificate Manager</fullname> <p>Welcome to the AWS Certificate Manager (ACM) API documentation.</p> <p>You can use ACM to manage SSL/TLS certificates for your AWS-based websites and applications. For general information about using ACM, see the <a href="http://docs.aws.amazon.com/acm/latest/userguide/"> <i>AWS Certificate Manager User Guide</i> </a>.</p>', 'operations' => [ 'AddTagsToCertificate' => '<p>Adds one or more tags to an ACM Certificate. Tags are labels that you can use to identify and organize your AWS resources. Each tag consists of a <code>key</code> and an optional <code>value</code>. You specify the certificate on input by its Amazon Resource Name (ARN). You specify the tag by using a key-value pair. </p> <p>You can apply a tag to just one certificate if you want to identify a specific characteristic of that certificate, or you can apply the same tag to multiple certificates if you want to filter for a common relationship among those certificates. Similarly, you can apply the same tag to multiple resources if you want to specify a relationship among those resources. For example, you can add the same tag to an ACM Certificate and an Elastic Load Balancing load balancer to indicate that they are both used by the same website. For more information, see <a href="http://docs.aws.amazon.com/acm/latest/userguide/tags.html">Tagging ACM Certificates</a>. </p> <p>To remove one or more tags, use the <a>RemoveTagsFromCertificate</a> action. To view all of the tags that have been applied to the certificate, use the <a>ListTagsForCertificate</a> action. </p>', 'DeleteCertificate' => '<p>Deletes a certificate and its associated private key. If this action succeeds, the certificate no longer appears in the list that can be displayed by calling the <a>ListCertificates</a> action or be retrieved by calling the <a>GetCertificate</a> action. The certificate will not be available for use by AWS services integrated with ACM. </p> <note> <p>You cannot delete an ACM Certificate that is being used by another AWS service. To delete a certificate that is in use, the certificate association must first be removed.</p> </note>', 'DescribeCertificate' => '<p>Returns detailed metadata about the specified ACM Certificate.</p>', 'GetCertificate' => '<p>Retrieves a certificate specified by an ARN and its certificate chain . The chain is an ordered list of certificates that contains the end entity certificate, intermediate certificates of subordinate CAs, and the root certificate in that order. The certificate and certificate chain are base64 encoded. If you want to decode the certificate to see the individual fields, you can use OpenSSL.</p>', 'ImportCertificate' => '<p>Imports a certificate into AWS Certificate Manager (ACM) to use with services that are integrated with ACM. Note that <a href="http://docs.aws.amazon.com/acm/latest/userguide/acm-services.html">integrated services</a> allow only certificate types and keys they support to be associated with their resources. Further, their support differs depending on whether the certificate is imported into IAM or into ACM. For more information, see the documentation for each service. For more information about importing certificates into ACM, see <a href="http://docs.aws.amazon.com/acm/latest/userguide/import-certificate.html">Importing Certificates</a> in the <i>AWS Certificate Manager User Guide</i>. </p> <note> <p>ACM does not provide <a href="http://docs.aws.amazon.com/acm/latest/userguide/acm-renewal.html">managed renewal</a> for certificates that you import.</p> </note> <p>Note the following guidelines when importing third party certificates:</p> <ul> <li> <p>You must enter the private key that matches the certificate you are importing.</p> </li> <li> <p>The private key must be unencrypted. You cannot import a private key that is protected by a password or a passphrase.</p> </li> <li> <p>If the certificate you are importing is not self-signed, you must enter its certificate chain.</p> </li> <li> <p>If a certificate chain is included, the issuer must be the subject of one of the certificates in the chain.</p> </li> <li> <p>The certificate, private key, and certificate chain must be PEM-encoded.</p> </li> <li> <p>The current time must be between the <code>Not Before</code> and <code>Not After</code> certificate fields.</p> </li> <li> <p>The <code>Issuer</code> field must not be empty.</p> </li> <li> <p>The OCSP authority URL, if present, must not exceed 1000 characters.</p> </li> <li> <p>To import a new certificate, omit the <code>CertificateArn</code> argument. Include this argument only when you want to replace a previously imported certificate.</p> </li> <li> <p>When you import a certificate by using the CLI or one of the SDKs, you must specify the certificate, the certificate chain, and the private key by their file names preceded by <code>file://</code>. For example, you can specify a certificate saved in the <code>C:\\temp</code> folder as <code>file://C:\\temp\\certificate_to_import.pem</code>. If you are making an HTTP or HTTPS Query request, include these arguments as BLOBs. </p> </li> </ul> <p>This operation returns the <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Name (ARN)</a> of the imported certificate.</p>', 'ListCertificates' => '<p>Retrieves a list of certificate ARNs and domain names. You can request that only certificates that match a specific status be listed. You can also filter by specific attributes of the certificate. </p>', 'ListTagsForCertificate' => '<p>Lists the tags that have been applied to the ACM Certificate. Use the certificate\'s Amazon Resource Name (ARN) to specify the certificate. To add a tag to an ACM Certificate, use the <a>AddTagsToCertificate</a> action. To delete a tag, use the <a>RemoveTagsFromCertificate</a> action. </p>', 'RemoveTagsFromCertificate' => '<p>Remove one or more tags from an ACM Certificate. A tag consists of a key-value pair. If you do not specify the value portion of the tag when calling this function, the tag will be removed regardless of value. If you specify a value, the tag is removed only if it is associated with the specified value. </p> <p>To add tags to a certificate, use the <a>AddTagsToCertificate</a> action. To view all of the tags that have been applied to a specific ACM Certificate, use the <a>ListTagsForCertificate</a> action. </p>', 'RequestCertificate' => '<p>Requests an ACM Certificate for use with other AWS services. To request an ACM Certificate, you must specify the fully qualified domain name (FQDN) for your site in the <code>DomainName</code> parameter. You can also specify additional FQDNs in the <code>SubjectAlternativeNames</code> parameter if users can reach your site by using other names. </p> <p>For each domain name you specify, email is sent to the domain owner to request approval to issue the certificate. Email is sent to three registered contact addresses in the WHOIS database and to five common system administration addresses formed from the <code>DomainName</code> you enter or the optional <code>ValidationDomain</code> parameter. For more information, see <a href="http://docs.aws.amazon.com/acm/latest/userguide/gs-acm-validate.html">Validate Domain Ownership</a>. </p> <p>After receiving approval from the domain owner, the ACM Certificate is issued. For more information, see the <a href="http://docs.aws.amazon.com/acm/latest/userguide/">AWS Certificate Manager User Guide</a>. </p>', 'ResendValidationEmail' => '<p>Resends the email that requests domain ownership validation. The domain owner or an authorized representative must approve the ACM Certificate before it can be issued. The certificate can be approved by clicking a link in the mail to navigate to the Amazon certificate approval website and then clicking <b>I Approve</b>. However, the validation email can be blocked by spam filters. Therefore, if you do not receive the original mail, you can request that the mail be resent within 72 hours of requesting the ACM Certificate. If more than 72 hours have elapsed since your original request or since your last attempt to resend validation mail, you must request a new certificate. For more information about setting up your contact email addresses, see <a href="http://docs.aws.amazon.com/acm/latest/userguide/setup-email.html">Configure Email for your Domain</a>. </p>', ], 'shapes' => [ 'AddTagsToCertificateRequest' => [ 'base' => NULL, 'refs' => [], ], 'Arn' => [ 'base' => NULL, 'refs' => [ 'AddTagsToCertificateRequest$CertificateArn' => '<p>String that contains the ARN of the ACM Certificate to which the tag is to be applied. This must be of the form:</p> <p> <code>arn:aws:acm:region:123456789012:certificate/12345678-1234-1234-1234-123456789012</code> </p> <p>For more information about ARNs, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and AWS Service Namespaces</a>. </p>', 'CertificateDetail$CertificateArn' => '<p>The Amazon Resource Name (ARN) of the certificate. For more information about ARNs, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and AWS Service Namespaces</a> in the <i>AWS General Reference</i>.</p>', 'CertificateSummary$CertificateArn' => '<p>Amazon Resource Name (ARN) of the certificate. This is of the form:</p> <p> <code>arn:aws:acm:region:123456789012:certificate/12345678-1234-1234-1234-123456789012</code> </p> <p>For more information about ARNs, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and AWS Service Namespaces</a>. </p>', 'DeleteCertificateRequest$CertificateArn' => '<p>String that contains the ARN of the ACM Certificate to be deleted. This must be of the form:</p> <p> <code>arn:aws:acm:region:123456789012:certificate/12345678-1234-1234-1234-123456789012</code> </p> <p>For more information about ARNs, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and AWS Service Namespaces</a>.</p>', 'DescribeCertificateRequest$CertificateArn' => '<p>The Amazon Resource Name (ARN) of the ACM Certificate. The ARN must have the following form:</p> <p> <code>arn:aws:acm:region:123456789012:certificate/12345678-1234-1234-1234-123456789012</code> </p> <p>For more information about ARNs, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and AWS Service Namespaces</a>.</p>', 'GetCertificateRequest$CertificateArn' => '<p>String that contains a certificate ARN in the following format:</p> <p> <code>arn:aws:acm:region:123456789012:certificate/12345678-1234-1234-1234-123456789012</code> </p> <p>For more information about ARNs, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and AWS Service Namespaces</a>.</p>', 'ImportCertificateRequest$CertificateArn' => '<p>The <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Name (ARN)</a> of an imported certificate to replace. To import a new certificate, omit this field. </p>', 'ImportCertificateResponse$CertificateArn' => '<p>The <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Name (ARN)</a> of the imported certificate.</p>', 'ListTagsForCertificateRequest$CertificateArn' => '<p>String that contains the ARN of the ACM Certificate for which you want to list the tags. This must have the following form:</p> <p> <code>arn:aws:acm:region:123456789012:certificate/12345678-1234-1234-1234-123456789012</code> </p> <p>For more information about ARNs, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and AWS Service Namespaces</a>. </p>', 'RemoveTagsFromCertificateRequest$CertificateArn' => '<p>String that contains the ARN of the ACM Certificate with one or more tags that you want to remove. This must be of the form:</p> <p> <code>arn:aws:acm:region:123456789012:certificate/12345678-1234-1234-1234-123456789012</code> </p> <p>For more information about ARNs, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and AWS Service Namespaces</a>. </p>', 'RequestCertificateResponse$CertificateArn' => '<p>String that contains the ARN of the issued certificate. This must be of the form:</p> <p> <code>arn:aws:acm:us-east-1:123456789012:certificate/12345678-1234-1234-1234-123456789012</code> </p>', 'ResendValidationEmailRequest$CertificateArn' => '<p>String that contains the ARN of the requested certificate. The certificate ARN is generated and returned by the <a>RequestCertificate</a> action as soon as the request is made. By default, using this parameter causes email to be sent to all top-level domains you specified in the certificate request. The ARN must be of the form: </p> <p> <code>arn:aws:acm:us-east-1:123456789012:certificate/12345678-1234-1234-1234-123456789012</code> </p>', ], ], 'CertificateBody' => [ 'base' => NULL, 'refs' => [ 'GetCertificateResponse$Certificate' => '<p>String that contains the ACM Certificate represented by the ARN specified at input.</p>', ], ], 'CertificateBodyBlob' => [ 'base' => NULL, 'refs' => [ 'ImportCertificateRequest$Certificate' => '<p>The certificate to import.</p>', ], ], 'CertificateChain' => [ 'base' => NULL, 'refs' => [ 'GetCertificateResponse$CertificateChain' => '<p>The certificate chain that contains the root certificate issued by the certificate authority (CA).</p>', ], ], 'CertificateChainBlob' => [ 'base' => NULL, 'refs' => [ 'ImportCertificateRequest$CertificateChain' => '<p>The PEM encoded certificate chain.</p>', ], ], 'CertificateDetail' => [ 'base' => '<p>Contains metadata about an ACM certificate. This structure is returned in the response to a <a>DescribeCertificate</a> request. </p>', 'refs' => [ 'DescribeCertificateResponse$Certificate' => '<p>Metadata about an ACM certificate.</p>', ], ], 'CertificateStatus' => [ 'base' => NULL, 'refs' => [ 'CertificateDetail$Status' => '<p>The status of the certificate.</p>', 'CertificateStatuses$member' => NULL, ], ], 'CertificateStatuses' => [ 'base' => NULL, 'refs' => [ 'ListCertificatesRequest$CertificateStatuses' => '<p>Filter the certificate list by status value.</p>', ], ], 'CertificateSummary' => [ 'base' => '<p>This structure is returned in the response object of <a>ListCertificates</a> action. </p>', 'refs' => [ 'CertificateSummaryList$member' => NULL, ], ], 'CertificateSummaryList' => [ 'base' => NULL, 'refs' => [ 'ListCertificatesResponse$CertificateSummaryList' => '<p>A list of ACM Certificates.</p>', ], ], 'CertificateType' => [ 'base' => NULL, 'refs' => [ 'CertificateDetail$Type' => '<p>The source of the certificate. For certificates provided by ACM, this value is <code>AMAZON_ISSUED</code>. For certificates that you imported with <a>ImportCertificate</a>, this value is <code>IMPORTED</code>. ACM does not provide <a href="http://docs.aws.amazon.com/acm/latest/userguide/acm-renewal.html">managed renewal</a> for imported certificates. For more information about the differences between certificates that you import and those that ACM provides, see <a href="http://docs.aws.amazon.com/acm/latest/userguide/import-certificate.html">Importing Certificates</a> in the <i>AWS Certificate Manager User Guide</i>. </p>', ], ], 'DeleteCertificateRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeCertificateRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeCertificateResponse' => [ 'base' => NULL, 'refs' => [], ], 'DomainList' => [ 'base' => NULL, 'refs' => [ 'CertificateDetail$SubjectAlternativeNames' => '<p>One or more domain names (subject alternative names) included in the certificate. This list contains the domain names that are bound to the public key that is contained in the certificate. The subject alternative names include the canonical domain name (CN) of the certificate and additional domain names that can be used to connect to the website. </p>', 'RequestCertificateRequest$SubjectAlternativeNames' => '<p>Additional FQDNs to be included in the Subject Alternative Name extension of the ACM Certificate. For example, add the name www.example.net to a certificate for which the <code>DomainName</code> field is www.example.com if users can reach your site by using either name. The maximum number of domain names that you can add to an ACM Certificate is 100. However, the initial limit is 10 domain names. If you need more than 10 names, you must request a limit increase. For more information, see <a href="http://docs.aws.amazon.com/acm/latest/userguide/acm-limits.html">Limits</a>.</p> <p> The maximum length of a SAN DNS name is 253 octets. The name is made up of multiple labels separated by periods. No label can be longer than 63 octets. Consider the following examples: </p> <ul> <li> <p> <code>(63 octets).(63 octets).(63 octets).(61 octets)</code> is legal because the total length is 253 octets (63+1+63+1+63+1+61) and no label exceeds 63 octets.</p> </li> <li> <p> <code>(64 octets).(63 octets).(63 octets).(61 octets)</code> is not legal because the total length exceeds 253 octets (64+1+63+1+63+1+61) and the first label exceeds 63 octets.</p> </li> <li> <p> <code>(63 octets).(63 octets).(63 octets).(62 octets)</code> is not legal because the total length of the DNS name (63+1+63+1+63+1+62) exceeds 253 octets.</p> </li> </ul>', ], ], 'DomainNameString' => [ 'base' => NULL, 'refs' => [ 'CertificateDetail$DomainName' => '<p>The fully qualified domain name for the certificate, such as www.example.com or example.com.</p>', 'CertificateSummary$DomainName' => '<p>Fully qualified domain name (FQDN), such as www.example.com or example.com, for the certificate.</p>', 'DomainList$member' => NULL, 'DomainValidation$DomainName' => '<p>A fully qualified domain name (FQDN) in the certificate. For example, <code>www.example.com</code> or <code>example.com</code>. </p>', 'DomainValidation$ValidationDomain' => '<p>The domain name that ACM used to send domain validation emails.</p>', 'DomainValidationOption$DomainName' => '<p>A fully qualified domain name (FQDN) in the certificate request.</p>', 'DomainValidationOption$ValidationDomain' => '<p>The domain name that you want ACM to use to send you validation emails. This domain name is the suffix of the email addresses that you want ACM to use. This must be the same as the <code>DomainName</code> value or a superdomain of the <code>DomainName</code> value. For example, if you request a certificate for <code>testing.example.com</code>, you can specify <code>example.com</code> for this value. In that case, ACM sends domain validation emails to the following five addresses:</p> <ul> <li> <p>admin@example.com</p> </li> <li> <p>administrator@example.com</p> </li> <li> <p>hostmaster@example.com</p> </li> <li> <p>postmaster@example.com</p> </li> <li> <p>webmaster@example.com</p> </li> </ul>', 'RequestCertificateRequest$DomainName' => '<p> Fully qualified domain name (FQDN), such as www.example.com, of the site that you want to secure with an ACM Certificate. Use an asterisk (*) to create a wildcard certificate that protects several sites in the same domain. For example, *.example.com protects www.example.com, site.example.com, and images.example.com. </p> <p> The first domain name you enter cannot exceed 63 octets, including periods. Each subsequent Subject Alternative Name (SAN), however, can be up to 253 octets in length. </p>', 'ResendValidationEmailRequest$Domain' => '<p>The fully qualified domain name (FQDN) of the certificate that needs to be validated.</p>', 'ResendValidationEmailRequest$ValidationDomain' => '<p>The base validation domain that will act as the suffix of the email addresses that are used to send the emails. This must be the same as the <code>Domain</code> value or a superdomain of the <code>Domain</code> value. For example, if you requested a certificate for <code>site.subdomain.example.com</code> and specify a <b>ValidationDomain</b> of <code>subdomain.example.com</code>, ACM sends email to the domain registrant, technical contact, and administrative contact in WHOIS and the following five addresses:</p> <ul> <li> <p>admin@subdomain.example.com</p> </li> <li> <p>administrator@subdomain.example.com</p> </li> <li> <p>hostmaster@subdomain.example.com</p> </li> <li> <p>postmaster@subdomain.example.com</p> </li> <li> <p>webmaster@subdomain.example.com</p> </li> </ul>', ], ], 'DomainStatus' => [ 'base' => NULL, 'refs' => [ 'DomainValidation$ValidationStatus' => '<p>The validation status of the domain name. This can be one of the following values:</p> <ul> <li> <p> <code>PENDING_VALIDATION</code> </p> </li> <li> <p> <code/>SUCCESS</p> </li> <li> <p> <code/>FAILED</p> </li> </ul>', ], ], 'DomainValidation' => [ 'base' => '<p>Contains information about the validation of each domain name in the certificate.</p>', 'refs' => [ 'DomainValidationList$member' => NULL, ], ], 'DomainValidationList' => [ 'base' => NULL, 'refs' => [ 'CertificateDetail$DomainValidationOptions' => '<p>Contains information about the initial validation of each domain name that occurs as a result of the <a>RequestCertificate</a> request. This field exists only when the certificate type is <code>AMAZON_ISSUED</code>. </p>', 'RenewalSummary$DomainValidationOptions' => '<p>Contains information about the validation of each domain name in the certificate, as it pertains to ACM\'s <a href="http://docs.aws.amazon.com/acm/latest/userguide/acm-renewal.html">managed renewal</a>. This is different from the initial validation that occurs as a result of the <a>RequestCertificate</a> request. This field exists only when the certificate type is <code>AMAZON_ISSUED</code>.</p>', ], ], 'DomainValidationOption' => [ 'base' => '<p>Contains information about the domain names that you want ACM to use to send you emails that enable you to validate domain ownership.</p>', 'refs' => [ 'DomainValidationOptionList$member' => NULL, ], ], 'DomainValidationOptionList' => [ 'base' => NULL, 'refs' => [ 'RequestCertificateRequest$DomainValidationOptions' => '<p>The domain name that you want ACM to use to send you emails so that you can validate domain ownership.</p>', ], ], 'ExtendedKeyUsage' => [ 'base' => '<p>The Extended Key Usage X.509 v3 extension defines one or more purposes for which the public key can be used. This is in addition to or in place of the basic purposes specified by the Key Usage extension. </p>', 'refs' => [ 'ExtendedKeyUsageList$member' => NULL, ], ], 'ExtendedKeyUsageFilterList' => [ 'base' => NULL, 'refs' => [ 'Filters$extendedKeyUsage' => '<p>Specify one or more <a>ExtendedKeyUsage</a> extension values.</p>', ], ], 'ExtendedKeyUsageList' => [ 'base' => NULL, 'refs' => [ 'CertificateDetail$ExtendedKeyUsages' => '<p>Contains a list of Extended Key Usage X.509 v3 extension objects. Each object specifies a purpose for which the certificate public key can be used and consists of a name and an object identifier (OID). </p>', ], ], 'ExtendedKeyUsageName' => [ 'base' => NULL, 'refs' => [ 'ExtendedKeyUsage$Name' => '<p>The name of an Extended Key Usage value.</p>', 'ExtendedKeyUsageFilterList$member' => NULL, ], ], 'FailureReason' => [ 'base' => NULL, 'refs' => [ 'CertificateDetail$FailureReason' => '<p>The reason the certificate request failed. This value exists only when the certificate status is <code>FAILED</code>. For more information, see <a href="http://docs.aws.amazon.com/acm/latest/userguide/troubleshooting.html#troubleshooting-failed">Certificate Request Failed</a> in the <i>AWS Certificate Manager User Guide</i>. </p>', ], ], 'Filters' => [ 'base' => '<p>This structure can be used in the <a>ListCertificates</a> action to filter the output of the certificate list. </p>', 'refs' => [ 'ListCertificatesRequest$Includes' => '<p>Filter the certificate list. For more information, see the <a>Filters</a> structure.</p>', ], ], 'GetCertificateRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetCertificateResponse' => [ 'base' => NULL, 'refs' => [], ], 'IdempotencyToken' => [ 'base' => NULL, 'refs' => [ 'RequestCertificateRequest$IdempotencyToken' => '<p>Customer chosen string that can be used to distinguish between calls to <code>RequestCertificate</code>. Idempotency tokens time out after one hour. Therefore, if you call <code>RequestCertificate</code> multiple times with the same idempotency token within one hour, ACM recognizes that you are requesting only one certificate and will issue only one. If you change the idempotency token for each call, ACM recognizes that you are requesting multiple certificates.</p>', ], ], 'ImportCertificateRequest' => [ 'base' => NULL, 'refs' => [], ], 'ImportCertificateResponse' => [ 'base' => NULL, 'refs' => [], ], 'InUseList' => [ 'base' => NULL, 'refs' => [ 'CertificateDetail$InUseBy' => '<p>A list of ARNs for the AWS resources that are using the certificate. A certificate can be used by multiple AWS resources. </p>', ], ], 'InvalidArnException' => [ 'base' => '<p>The requested Amazon Resource Name (ARN) does not refer to an existing resource.</p>', 'refs' => [], ], 'InvalidDomainValidationOptionsException' => [ 'base' => '<p>One or more values in the <a>DomainValidationOption</a> structure is incorrect.</p>', 'refs' => [], ], 'InvalidStateException' => [ 'base' => '<p>Processing has reached an invalid state. For example, this exception can occur if the specified domain is not using email validation, or the current certificate status does not permit the requested operation. See the exception message returned by ACM to determine which state is not valid.</p>', 'refs' => [], ], 'InvalidTagException' => [ 'base' => '<p>One or both of the values that make up the key-value pair is not valid. For example, you cannot specify a tag value that begins with <code>aws:</code>.</p>', 'refs' => [], ], 'KeyAlgorithm' => [ 'base' => NULL, 'refs' => [ 'CertificateDetail$KeyAlgorithm' => '<p>The algorithm that was used to generate the public-private key pair.</p>', 'KeyAlgorithmList$member' => NULL, ], ], 'KeyAlgorithmList' => [ 'base' => NULL, 'refs' => [ 'Filters$keyTypes' => '<p>Specify one or more algorithms that can be used to generate key pairs.</p>', ], ], 'KeyUsage' => [ 'base' => '<p>The Key Usage X.509 v3 extension defines the purpose of the public key contained in the certificate.</p>', 'refs' => [ 'KeyUsageList$member' => NULL, ], ], 'KeyUsageFilterList' => [ 'base' => NULL, 'refs' => [ 'Filters$keyUsage' => '<p>Specify one or more <a>KeyUsage</a> extension values.</p>', ], ], 'KeyUsageList' => [ 'base' => NULL, 'refs' => [ 'CertificateDetail$KeyUsages' => '<p>A list of Key Usage X.509 v3 extension objects. Each object is a string value that identifies the purpose of the public key contained in the certificate. Possible extension values include DIGITAL_SIGNATURE, KEY_ENCHIPHERMENT, NON_REPUDIATION, and more.</p>', ], ], 'KeyUsageName' => [ 'base' => NULL, 'refs' => [ 'KeyUsage$Name' => '<p>A string value that contains a Key Usage extension name.</p>', 'KeyUsageFilterList$member' => NULL, ], ], 'LimitExceededException' => [ 'base' => '<p>An ACM limit has been exceeded. For example, you may have input more domains than are allowed or you\'ve requested too many certificates for your account. See the exception message returned by ACM to determine which limit you have violated. For more information about ACM limits, see the <a href="http://docs.aws.amazon.com/acm/latest/userguide/acm-limits.html">Limits</a> topic.</p>', 'refs' => [], ], 'ListCertificatesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListCertificatesResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForCertificateRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForCertificateResponse' => [ 'base' => NULL, 'refs' => [], ], 'MaxItems' => [ 'base' => NULL, 'refs' => [ 'ListCertificatesRequest$MaxItems' => '<p>Use this parameter when paginating results to specify the maximum number of items to return in the response. If additional items exist beyond the number you specify, the <code>NextToken</code> element is sent in the response. Use this <code>NextToken</code> value in a subsequent request to retrieve additional items.</p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListCertificatesRequest$NextToken' => '<p>Use this parameter only when paginating results and only in a subsequent request after you receive a response with truncated results. Set it to the value of <code>NextToken</code> from the response you just received.</p>', 'ListCertificatesResponse$NextToken' => '<p>When the list is truncated, this value is present and contains the value to use for the <code>NextToken</code> parameter in a subsequent pagination request.</p>', ], ], 'PrivateKeyBlob' => [ 'base' => NULL, 'refs' => [ 'ImportCertificateRequest$PrivateKey' => '<p>The private key that matches the public key in the certificate.</p>', ], ], 'RecordType' => [ 'base' => NULL, 'refs' => [ 'ResourceRecord$Type' => '<p>The type of DNS record. Currently this can be <code>CNAME</code>.</p>', ], ], 'RemoveTagsFromCertificateRequest' => [ 'base' => NULL, 'refs' => [], ], 'RenewalStatus' => [ 'base' => NULL, 'refs' => [ 'RenewalSummary$RenewalStatus' => '<p>The status of ACM\'s <a href="http://docs.aws.amazon.com/acm/latest/userguide/acm-renewal.html">managed renewal</a> of the certificate.</p>', ], ], 'RenewalSummary' => [ 'base' => '<p>Contains information about the status of ACM\'s <a href="http://docs.aws.amazon.com/acm/latest/userguide/acm-renewal.html">managed renewal</a> for the certificate. This structure exists only when the certificate type is <code>AMAZON_ISSUED</code>.</p>', 'refs' => [ 'CertificateDetail$RenewalSummary' => '<p>Contains information about the status of ACM\'s <a href="http://docs.aws.amazon.com/acm/latest/userguide/acm-renewal.html">managed renewal</a> for the certificate. This field exists only when the certificate type is <code>AMAZON_ISSUED</code>.</p>', ], ], 'RequestCertificateRequest' => [ 'base' => NULL, 'refs' => [], ], 'RequestCertificateResponse' => [ 'base' => NULL, 'refs' => [], ], 'RequestInProgressException' => [ 'base' => '<p>The certificate request is in process and the certificate in your account has not yet been issued.</p>', 'refs' => [], ], 'ResendValidationEmailRequest' => [ 'base' => NULL, 'refs' => [], ], 'ResourceInUseException' => [ 'base' => '<p>The certificate is in use by another AWS service in the caller\'s account. Remove the association and try again.</p>', 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified certificate cannot be found in the caller\'s account, or the caller\'s account cannot be found.</p>', 'refs' => [], ], 'ResourceRecord' => [ 'base' => '<p>Contains a DNS record value that you can use to can use to validate ownership or control of a domain. This is used by the <a>DescribeCertificate</a> action. </p>', 'refs' => [ 'DomainValidation$ResourceRecord' => '<p>Contains the CNAME record that you add to your DNS database for domain validation. For more information, see <a href="http://docs.aws.amazon.com/acm/latest/userguide/gs-acm-validate-dns.html">Use DNS to Validate Domain Ownership</a>.</p>', ], ], 'RevocationReason' => [ 'base' => NULL, 'refs' => [ 'CertificateDetail$RevocationReason' => '<p>The reason the certificate was revoked. This value exists only when the certificate status is <code>REVOKED</code>. </p>', ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'CertificateDetail$Serial' => '<p>The serial number of the certificate.</p>', 'CertificateDetail$Subject' => '<p>The name of the entity that is associated with the public key contained in the certificate.</p>', 'CertificateDetail$Issuer' => '<p>The name of the certificate authority that issued and signed the certificate.</p>', 'CertificateDetail$SignatureAlgorithm' => '<p>The algorithm that was used to sign the certificate.</p>', 'ExtendedKeyUsage$OID' => '<p>An object identifier (OID) for the extension value. OIDs are strings of numbers separated by periods. The following OIDs are defined in RFC 3280 and RFC 5280. </p> <ul> <li> <p> <code>1.3.6.1.5.5.7.3.1 (TLS_WEB_SERVER_AUTHENTICATION)</code> </p> </li> <li> <p> <code>1.3.6.1.5.5.7.3.2 (TLS_WEB_CLIENT_AUTHENTICATION)</code> </p> </li> <li> <p> <code>1.3.6.1.5.5.7.3.3 (CODE_SIGNING)</code> </p> </li> <li> <p> <code>1.3.6.1.5.5.7.3.4 (EMAIL_PROTECTION)</code> </p> </li> <li> <p> <code>1.3.6.1.5.5.7.3.8 (TIME_STAMPING)</code> </p> </li> <li> <p> <code>1.3.6.1.5.5.7.3.9 (OCSP_SIGNING)</code> </p> </li> <li> <p> <code>1.3.6.1.5.5.7.3.5 (IPSEC_END_SYSTEM)</code> </p> </li> <li> <p> <code>1.3.6.1.5.5.7.3.6 (IPSEC_TUNNEL)</code> </p> </li> <li> <p> <code>1.3.6.1.5.5.7.3.7 (IPSEC_USER)</code> </p> </li> </ul>', 'InUseList$member' => NULL, 'InvalidArnException$message' => NULL, 'InvalidDomainValidationOptionsException$message' => NULL, 'InvalidStateException$message' => NULL, 'InvalidTagException$message' => NULL, 'LimitExceededException$message' => NULL, 'RequestInProgressException$message' => NULL, 'ResourceInUseException$message' => NULL, 'ResourceNotFoundException$message' => NULL, 'ResourceRecord$Name' => '<p>The name of the DNS record to create in your domain. This is supplied by ACM.</p>', 'ResourceRecord$Value' => '<p>The value of the CNAME record to add to your DNS database. This is supplied by ACM.</p>', 'TooManyTagsException$message' => NULL, 'ValidationEmailList$member' => NULL, ], ], 'TStamp' => [ 'base' => NULL, 'refs' => [ 'CertificateDetail$CreatedAt' => '<p>The time at which the certificate was requested. This value exists only when the certificate type is <code>AMAZON_ISSUED</code>. </p>', 'CertificateDetail$IssuedAt' => '<p>The time at which the certificate was issued. This value exists only when the certificate type is <code>AMAZON_ISSUED</code>. </p>', 'CertificateDetail$ImportedAt' => '<p>The date and time at which the certificate was imported. This value exists only when the certificate type is <code>IMPORTED</code>. </p>', 'CertificateDetail$RevokedAt' => '<p>The time at which the certificate was revoked. This value exists only when the certificate status is <code>REVOKED</code>. </p>', 'CertificateDetail$NotBefore' => '<p>The time before which the certificate is not valid.</p>', 'CertificateDetail$NotAfter' => '<p>The time after which the certificate is not valid.</p>', ], ], 'Tag' => [ 'base' => '<p>A key-value pair that identifies or specifies metadata about an ACM resource.</p>', 'refs' => [ 'TagList$member' => NULL, ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'Tag$Key' => '<p>The key of the tag.</p>', ], ], 'TagList' => [ 'base' => NULL, 'refs' => [ 'AddTagsToCertificateRequest$Tags' => '<p>The key-value pair that defines the tag. The tag value is optional.</p>', 'ListTagsForCertificateResponse$Tags' => '<p>The key-value pairs that define the applied tags.</p>', 'RemoveTagsFromCertificateRequest$Tags' => '<p>The key-value pair that defines the tag to remove.</p>', ], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'Tag$Value' => '<p>The value of the tag.</p>', ], ], 'TooManyTagsException' => [ 'base' => '<p>The request contains too many tags. Try the request again with fewer tags.</p>', 'refs' => [], ], 'ValidationEmailList' => [ 'base' => NULL, 'refs' => [ 'DomainValidation$ValidationEmails' => '<p>A list of email addresses that ACM used to send domain validation emails.</p>', ], ], 'ValidationMethod' => [ 'base' => NULL, 'refs' => [ 'DomainValidation$ValidationMethod' => '<p>Specifies the domain validation method.</p>', 'RequestCertificateRequest$ValidationMethod' => '<p>The method you want to use to validate your domain.</p>', ], ], ],];
