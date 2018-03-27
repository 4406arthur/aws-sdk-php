<?php
// This file was auto-generated from sdk-root/src/data/cloudhsmv2/2017-04-28/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>For more information about AWS CloudHSM, see <a href="http://aws.amazon.com/cloudhsm/">AWS CloudHSM</a> and the <a href="http://docs.aws.amazon.com/cloudhsm/latest/userguide/">AWS CloudHSM User Guide</a>.</p>', 'operations' => [ 'CreateCluster' => '<p>Creates a new AWS CloudHSM cluster.</p>', 'CreateHsm' => '<p>Creates a new hardware security module (HSM) in the specified AWS CloudHSM cluster.</p>', 'DeleteCluster' => '<p>Deletes the specified AWS CloudHSM cluster. Before you can delete a cluster, you must delete all HSMs in the cluster. To see if the cluster contains any HSMs, use <a>DescribeClusters</a>. To delete an HSM, use <a>DeleteHsm</a>.</p>', 'DeleteHsm' => '<p>Deletes the specified HSM. To specify an HSM, you can use its identifier (ID), the IP address of the HSM\'s elastic network interface (ENI), or the ID of the HSM\'s ENI. You need to specify only one of these values. To find these values, use <a>DescribeClusters</a>.</p>', 'DescribeBackups' => '<p>Gets information about backups of AWS CloudHSM clusters.</p> <p>This is a paginated operation, which means that each response might contain only a subset of all the backups. When the response contains only a subset of backups, it includes a <code>NextToken</code> value. Use this value in a subsequent <code>DescribeBackups</code> request to get more backups. When you receive a response with no <code>NextToken</code> (or an empty or null value), that means there are no more backups to get.</p>', 'DescribeClusters' => '<p>Gets information about AWS CloudHSM clusters.</p> <p>This is a paginated operation, which means that each response might contain only a subset of all the clusters. When the response contains only a subset of clusters, it includes a <code>NextToken</code> value. Use this value in a subsequent <code>DescribeClusters</code> request to get more clusters. When you receive a response with no <code>NextToken</code> (or an empty or null value), that means there are no more clusters to get.</p>', 'InitializeCluster' => '<p>Claims an AWS CloudHSM cluster by submitting the cluster certificate issued by your issuing certificate authority (CA) and the CA\'s root certificate. Before you can claim a cluster, you must sign the cluster\'s certificate signing request (CSR) with your issuing CA. To get the cluster\'s CSR, use <a>DescribeClusters</a>.</p>', 'ListTags' => '<p>Gets a list of tags for the specified AWS CloudHSM cluster.</p> <p>This is a paginated operation, which means that each response might contain only a subset of all the tags. When the response contains only a subset of tags, it includes a <code>NextToken</code> value. Use this value in a subsequent <code>ListTags</code> request to get more tags. When you receive a response with no <code>NextToken</code> (or an empty or null value), that means there are no more tags to get.</p>', 'TagResource' => '<p>Adds or overwrites one or more tags for the specified AWS CloudHSM cluster.</p>', 'UntagResource' => '<p>Removes the specified tag or tags from the specified AWS CloudHSM cluster.</p>', ], 'shapes' => [ 'Backup' => [ 'base' => '<p>Contains information about a backup of an AWS CloudHSM cluster.</p>', 'refs' => [ 'Backups$member' => NULL, ], ], 'BackupId' => [ 'base' => NULL, 'refs' => [ 'Backup$BackupId' => '<p>The identifier (ID) of the backup.</p>', 'Cluster$SourceBackupId' => '<p>The identifier (ID) of the backup used to create the cluster. This value exists only when the cluster was created from a backup.</p>', 'CreateClusterRequest$SourceBackupId' => '<p>The identifier (ID) of the cluster backup to restore. Use this value to restore the cluster from a backup instead of creating a new cluster. To find the backup ID, use <a>DescribeBackups</a>.</p>', ], ], 'BackupPolicy' => [ 'base' => NULL, 'refs' => [ 'Cluster$BackupPolicy' => '<p>The cluster\'s backup policy.</p>', ], ], 'BackupState' => [ 'base' => NULL, 'refs' => [ 'Backup$BackupState' => '<p>The state of the backup.</p>', ], ], 'Backups' => [ 'base' => NULL, 'refs' => [ 'DescribeBackupsResponse$Backups' => '<p>A list of backups.</p>', ], ], 'Cert' => [ 'base' => NULL, 'refs' => [ 'Certificates$ClusterCsr' => '<p>The cluster\'s certificate signing request (CSR). The CSR exists only when the cluster\'s state is <code>UNINITIALIZED</code>.</p>', 'Certificates$HsmCertificate' => '<p>The HSM certificate issued (signed) by the HSM hardware.</p>', 'Certificates$AwsHardwareCertificate' => '<p>The HSM hardware certificate issued (signed) by AWS CloudHSM.</p>', 'Certificates$ManufacturerHardwareCertificate' => '<p>The HSM hardware certificate issued (signed) by the hardware manufacturer.</p>', 'Certificates$ClusterCertificate' => '<p>The cluster certificate issued (signed) by the issuing certificate authority (CA) of the cluster\'s owner.</p>', 'InitializeClusterRequest$SignedCert' => '<p>The cluster certificate issued (signed) by your issuing certificate authority (CA). The certificate must be in PEM format and can contain a maximum of 5000 characters.</p>', 'InitializeClusterRequest$TrustAnchor' => '<p>The issuing certificate of the issuing certificate authority (CA) that issued (signed) the cluster certificate. This can be a root (self-signed) certificate or a certificate chain that begins with the certificate that issued the cluster certificate and ends with a root certificate. The certificate or certificate chain must be in PEM format and can contain a maximum of 5000 characters.</p>', ], ], 'Certificates' => [ 'base' => '<p>Contains one or more certificates or a certificate signing request (CSR).</p>', 'refs' => [ 'Cluster$Certificates' => '<p>Contains one or more certificates or a certificate signing request (CSR).</p>', ], ], 'CloudHsmAccessDeniedException' => [ 'base' => '<p>The request was rejected because the requester does not have permission to perform the requested operation.</p>', 'refs' => [], ], 'CloudHsmInternalFailureException' => [ 'base' => '<p>The request was rejected because of an AWS CloudHSM internal failure. The request can be retried.</p>', 'refs' => [], ], 'CloudHsmInvalidRequestException' => [ 'base' => '<p>The request was rejected because it is not a valid request.</p>', 'refs' => [], ], 'CloudHsmResourceNotFoundException' => [ 'base' => '<p>The request was rejected because it refers to a resource that cannot be found.</p>', 'refs' => [], ], 'CloudHsmServiceException' => [ 'base' => '<p>The request was rejected because an error occurred.</p>', 'refs' => [], ], 'Cluster' => [ 'base' => '<p>Contains information about an AWS CloudHSM cluster.</p>', 'refs' => [ 'Clusters$member' => NULL, 'CreateClusterResponse$Cluster' => '<p>Information about the cluster that was created.</p>', 'DeleteClusterResponse$Cluster' => '<p>Information about the cluster that was deleted.</p>', ], ], 'ClusterId' => [ 'base' => NULL, 'refs' => [ 'Backup$ClusterId' => '<p>The identifier (ID) of the cluster that was backed up.</p>', 'Cluster$ClusterId' => '<p>The cluster\'s identifier (ID).</p>', 'CreateHsmRequest$ClusterId' => '<p>The identifier (ID) of the HSM\'s cluster. To find the cluster ID, use <a>DescribeClusters</a>.</p>', 'DeleteClusterRequest$ClusterId' => '<p>The identifier (ID) of the cluster that you are deleting. To find the cluster ID, use <a>DescribeClusters</a>.</p>', 'DeleteHsmRequest$ClusterId' => '<p>The identifier (ID) of the cluster that contains the HSM that you are deleting.</p>', 'Hsm$ClusterId' => '<p>The identifier (ID) of the cluster that contains the HSM.</p>', 'InitializeClusterRequest$ClusterId' => '<p>The identifier (ID) of the cluster that you are claiming. To find the cluster ID, use <a>DescribeClusters</a>.</p>', 'ListTagsRequest$ResourceId' => '<p>The cluster identifier (ID) for the cluster whose tags you are getting. To find the cluster ID, use <a>DescribeClusters</a>.</p>', 'TagResourceRequest$ResourceId' => '<p>The cluster identifier (ID) for the cluster that you are tagging. To find the cluster ID, use <a>DescribeClusters</a>.</p>', 'UntagResourceRequest$ResourceId' => '<p>The cluster identifier (ID) for the cluster whose tags you are removing. To find the cluster ID, use <a>DescribeClusters</a>.</p>', ], ], 'ClusterState' => [ 'base' => NULL, 'refs' => [ 'Cluster$State' => '<p>The cluster\'s state.</p>', 'InitializeClusterResponse$State' => '<p>The cluster\'s state.</p>', ], ], 'Clusters' => [ 'base' => NULL, 'refs' => [ 'DescribeClustersResponse$Clusters' => '<p>A list of clusters.</p>', ], ], 'CreateClusterRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateClusterResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateHsmRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateHsmResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteClusterRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteClusterResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteHsmRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteHsmResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeBackupsRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeBackupsResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeClustersRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeClustersResponse' => [ 'base' => NULL, 'refs' => [], ], 'EniId' => [ 'base' => NULL, 'refs' => [ 'DeleteHsmRequest$EniId' => '<p>The identifier (ID) of the elastic network interface (ENI) of the HSM that you are deleting.</p>', 'Hsm$EniId' => '<p>The identifier (ID) of the HSM\'s elastic network interface (ENI).</p>', ], ], 'ExternalAz' => [ 'base' => NULL, 'refs' => [ 'CreateHsmRequest$AvailabilityZone' => '<p>The Availability Zone where you are creating the HSM. To find the cluster\'s Availability Zones, use <a>DescribeClusters</a>.</p>', 'ExternalSubnetMapping$key' => NULL, 'Hsm$AvailabilityZone' => '<p>The Availability Zone that contains the HSM.</p>', ], ], 'ExternalSubnetMapping' => [ 'base' => NULL, 'refs' => [ 'Cluster$SubnetMapping' => '<p>A map of the cluster\'s subnets and their corresponding Availability Zones.</p>', ], ], 'Field' => [ 'base' => NULL, 'refs' => [ 'Filters$key' => NULL, ], ], 'Filters' => [ 'base' => NULL, 'refs' => [ 'DescribeBackupsRequest$Filters' => '<p>One or more filters to limit the items returned in the response.</p> <p>Use the <code>backupIds</code> filter to return only the specified backups. Specify backups by their backup identifier (ID).</p> <p>Use the <code>clusterIds</code> filter to return only the backups for the specified clusters. Specify clusters by their cluster identifier (ID).</p> <p>Use the <code>states</code> filter to return only backups that match the specified state.</p>', 'DescribeClustersRequest$Filters' => '<p>One or more filters to limit the items returned in the response.</p> <p>Use the <code>clusterIds</code> filter to return only the specified clusters. Specify clusters by their cluster identifier (ID).</p> <p>Use the <code>vpcIds</code> filter to return only the clusters in the specified virtual private clouds (VPCs). Specify VPCs by their VPC identifier (ID).</p> <p>Use the <code>states</code> filter to return only clusters that match the specified state.</p>', ], ], 'Hsm' => [ 'base' => '<p>Contains information about a hardware security module (HSM) in an AWS CloudHSM cluster.</p>', 'refs' => [ 'CreateHsmResponse$Hsm' => '<p>Information about the HSM that was created.</p>', 'Hsms$member' => NULL, ], ], 'HsmId' => [ 'base' => NULL, 'refs' => [ 'DeleteHsmRequest$HsmId' => '<p>The identifier (ID) of the HSM that you are deleting.</p>', 'DeleteHsmResponse$HsmId' => '<p>The identifier (ID) of the HSM that was deleted.</p>', 'Hsm$HsmId' => '<p>The HSM\'s identifier (ID).</p>', ], ], 'HsmState' => [ 'base' => NULL, 'refs' => [ 'Hsm$State' => '<p>The HSM\'s state.</p>', ], ], 'HsmType' => [ 'base' => NULL, 'refs' => [ 'Cluster$HsmType' => '<p>The type of HSM that the cluster contains.</p>', 'CreateClusterRequest$HsmType' => '<p>The type of HSM to use in the cluster. Currently the only allowed value is <code>hsm1.medium</code>.</p>', ], ], 'Hsms' => [ 'base' => NULL, 'refs' => [ 'Cluster$Hsms' => '<p>Contains information about the HSMs in the cluster.</p>', ], ], 'InitializeClusterRequest' => [ 'base' => NULL, 'refs' => [], ], 'InitializeClusterResponse' => [ 'base' => NULL, 'refs' => [], ], 'IpAddress' => [ 'base' => NULL, 'refs' => [ 'CreateHsmRequest$IpAddress' => '<p>The HSM\'s IP address. If you specify an IP address, use an available address from the subnet that maps to the Availability Zone where you are creating the HSM. If you don\'t specify an IP address, one is chosen for you from that subnet.</p>', 'DeleteHsmRequest$EniIp' => '<p>The IP address of the elastic network interface (ENI) of the HSM that you are deleting.</p>', 'Hsm$EniIp' => '<p>The IP address of the HSM\'s elastic network interface (ENI).</p>', ], ], 'ListTagsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsResponse' => [ 'base' => NULL, 'refs' => [], ], 'MaxSize' => [ 'base' => NULL, 'refs' => [ 'DescribeBackupsRequest$MaxResults' => '<p>The maximum number of backups to return in the response. When there are more backups than the number you specify, the response contains a <code>NextToken</code> value.</p>', 'DescribeClustersRequest$MaxResults' => '<p>The maximum number of clusters to return in the response. When there are more clusters than the number you specify, the response contains a <code>NextToken</code> value.</p>', 'ListTagsRequest$MaxResults' => '<p>The maximum number of tags to return in the response. When there are more tags than the number you specify, the response contains a <code>NextToken</code> value.</p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'DescribeBackupsRequest$NextToken' => '<p>The <code>NextToken</code> value that you received in the previous response. Use this value to get more backups.</p>', 'DescribeBackupsResponse$NextToken' => '<p>An opaque string that indicates that the response contains only a subset of backups. Use this value in a subsequent <code>DescribeBackups</code> request to get more backups.</p>', 'DescribeClustersRequest$NextToken' => '<p>The <code>NextToken</code> value that you received in the previous response. Use this value to get more clusters.</p>', 'DescribeClustersResponse$NextToken' => '<p>An opaque string that indicates that the response contains only a subset of clusters. Use this value in a subsequent <code>DescribeClusters</code> request to get more clusters.</p>', 'ListTagsRequest$NextToken' => '<p>The <code>NextToken</code> value that you received in the previous response. Use this value to get more tags.</p>', 'ListTagsResponse$NextToken' => '<p>An opaque string that indicates that the response contains only a subset of tags. Use this value in a subsequent <code>ListTags</code> request to get more tags.</p>', ], ], 'PreCoPassword' => [ 'base' => NULL, 'refs' => [ 'Cluster$PreCoPassword' => '<p>The default password for the cluster\'s Pre-Crypto Officer (PRECO) user.</p>', ], ], 'SecurityGroup' => [ 'base' => NULL, 'refs' => [ 'Cluster$SecurityGroup' => '<p>The identifier (ID) of the cluster\'s security group.</p>', ], ], 'StateMessage' => [ 'base' => NULL, 'refs' => [ 'Cluster$StateMessage' => '<p>A description of the cluster\'s state.</p>', 'InitializeClusterResponse$StateMessage' => '<p>A description of the cluster\'s state.</p>', ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'Hsm$StateMessage' => '<p>A description of the HSM\'s state.</p>', 'Strings$member' => NULL, ], ], 'Strings' => [ 'base' => NULL, 'refs' => [ 'Filters$value' => NULL, ], ], 'SubnetId' => [ 'base' => NULL, 'refs' => [ 'ExternalSubnetMapping$value' => NULL, 'Hsm$SubnetId' => '<p>The subnet that contains the HSM\'s elastic network interface (ENI).</p>', 'SubnetIds$member' => NULL, ], ], 'SubnetIds' => [ 'base' => NULL, 'refs' => [ 'CreateClusterRequest$SubnetIds' => '<p>The identifiers (IDs) of the subnets where you are creating the cluster. You must specify at least one subnet. If you specify multiple subnets, they must meet the following criteria:</p> <ul> <li> <p>All subnets must be in the same virtual private cloud (VPC).</p> </li> <li> <p>You can specify only one subnet per Availability Zone.</p> </li> </ul>', ], ], 'Tag' => [ 'base' => '<p>Contains a tag. A tag is a key-value pair.</p>', 'refs' => [ 'TagList$member' => NULL, ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'Tag$Key' => '<p>The key of the tag.</p>', 'TagKeyList$member' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$TagKeyList' => '<p>A list of one or more tag keys for the tags that you are removing. Specify only the tag keys, not the tag values.</p>', ], ], 'TagList' => [ 'base' => NULL, 'refs' => [ 'ListTagsResponse$TagList' => '<p>A list of tags.</p>', 'TagResourceRequest$TagList' => '<p>A list of one or more tags.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'Tag$Value' => '<p>The value of the tag.</p>', ], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'Backup$CreateTimestamp' => '<p>The date and time when the backup was created.</p>', 'Cluster$CreateTimestamp' => '<p>The date and time when the cluster was created.</p>', ], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'VpcId' => [ 'base' => NULL, 'refs' => [ 'Cluster$VpcId' => '<p>The identifier (ID) of the virtual private cloud (VPC) that contains the cluster.</p>', ], ], 'errorMessage' => [ 'base' => NULL, 'refs' => [ 'CloudHsmAccessDeniedException$Message' => NULL, 'CloudHsmInternalFailureException$Message' => NULL, 'CloudHsmInvalidRequestException$Message' => NULL, 'CloudHsmResourceNotFoundException$Message' => NULL, 'CloudHsmServiceException$Message' => NULL, ], ], ],];
