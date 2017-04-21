<?php
// This file was auto-generated from sdk-root/src/data/workdocs/2016-05-01/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>The WorkDocs API is designed for the following use cases:</p> <ul> <li> <p>File Migration: File migration applications are supported for users who want to migrate their files from an on-premise or off-premise file system or service. Users can insert files into a user directory structure, as well as allow for basic metadata changes, such as modifications to the permissions of files.</p> </li> <li> <p>Security: Support security applications are supported for users who have additional security needs, such as anti-virus or data loss prevention. The APIs, in conjunction with Amazon CloudTrail, allow these applications to detect when changes occur in Amazon WorkDocs, so the application can take the necessary actions and replace the target file. The application can also choose to email the user if the target file violates the policy.</p> </li> <li> <p>eDiscovery/Analytics: General administrative applications are supported, such as eDiscovery and analytics. These applications can choose to mimic and/or record the actions in an Amazon WorkDocs site, in conjunction with Amazon CloudTrails, to replicate data for eDiscovery, backup, or analytical applications.</p> </li> </ul> <p>All Amazon WorkDocs APIs are Amazon authenticated, certificate-signed APIs. They not only require the use of the AWS SDK, but also allow for the exclusive use of IAM users and roles to help facilitate access, trust, and permission policies. By creating a role and allowing an IAM user to access the Amazon WorkDocs site, the IAM user gains full administrative visibility into the entire Amazon WorkDocs site (or as set in the IAM policy). This includes, but is not limited to, the ability to modify file permissions and upload any file to any user. This allows developers to perform the three use cases above, as well as give users the ability to grant access on a selective basis using the IAM model.</p>', 'operations' => [ 'AbortDocumentVersionUpload' => '<p>Aborts the upload of the specified document version that was previously initiated by <a>InitiateDocumentVersionUpload</a>. The client should make this call only when it no longer intends or fails to upload the document version.</p>', 'ActivateUser' => '<p>Activates the specified user. Only active users can access Amazon WorkDocs.</p>', 'AddResourcePermissions' => '<p>Creates a set of permissions for the specified folder or document. The resource permissions are overwritten if the principals already have different permissions.</p>', 'CreateFolder' => '<p>Creates a folder with the specified name and parent folder.</p>', 'CreateNotificationSubscription' => '<p>Configure WorkDocs to use Amazon SNS notifications.</p> <p>The endpoint receives a confirmation message, and must confirm the subscription. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/dg/SendMessageToHttp.html#SendMessageToHttp.confirm">Confirm the Subscription</a> in the <i>Amazon Simple Notification Service Developer Guide</i>.</p>', 'CreateUser' => '<p>Creates a user in a Simple AD or Microsoft AD directory. The status of a newly created user is "ACTIVE". New users can access Amazon WorkDocs.</p>', 'DeactivateUser' => '<p>Deactivates the specified user, which revokes the user\'s access to Amazon WorkDocs.</p>', 'DeleteDocument' => '<p>Permanently deletes the specified document and its associated metadata.</p>', 'DeleteFolder' => '<p>Permanently deletes the specified folder and its contents.</p>', 'DeleteFolderContents' => '<p>Deletes the contents of the specified folder.</p>', 'DeleteNotificationSubscription' => '<p>Deletes the specified subscription from the specified organization.</p>', 'DeleteUser' => '<p>Deletes the specified user from a Simple AD or Microsoft AD directory.</p>', 'DescribeDocumentVersions' => '<p>Retrieves the document versions for the specified document.</p> <p>By default, only active versions are returned.</p>', 'DescribeFolderContents' => '<p>Describes the contents of the specified folder, including its documents and sub-folders.</p> <p>By default, Amazon WorkDocs returns the first 100 active document and folder metadata items. If there are more results, the response includes a marker that you can use to request the next set of results. You can also request initialized documents.</p>', 'DescribeNotificationSubscriptions' => '<p>Lists the specified notification subscriptions.</p>', 'DescribeResourcePermissions' => '<p>Describes the permissions of a specified resource.</p>', 'DescribeUsers' => '<p>Describes the specified users. You can describe all users or filter the results (for example, by status or organization).</p> <p>By default, Amazon WorkDocs returns the first 24 active or pending users. If there are more results, the response includes a marker that you can use to request the next set of results.</p>', 'GetDocument' => '<p>Retrieves the specified document object.</p>', 'GetDocumentPath' => '<p>Retrieves the path information (the hierarchy from the root folder) for the requested document.</p> <p>By default, Amazon WorkDocs returns a maximum of 100 levels upwards from the requested document and only includes the IDs of the parent folders in the path. You can limit the maximum number of levels. You can also request the names of the parent folders.</p>', 'GetDocumentVersion' => '<p>Retrieves version metadata for the specified document.</p>', 'GetFolder' => '<p>Retrieves the metadata of the specified folder.</p>', 'GetFolderPath' => '<p>Retrieves the path information (the hierarchy from the root folder) for the specified folder.</p> <p>By default, Amazon WorkDocs returns a maximum of 100 levels upwards from the requested folder and only includes the IDs of the parent folders in the path. You can limit the maximum number of levels. You can also request the parent folder names.</p>', 'InitiateDocumentVersionUpload' => '<p>Creates a new document object and version object.</p> <p>The client specifies the parent folder ID and name of the document to upload. The ID is optionally specified when creating a new version of an existing document. This is the first step to upload a document. Next, upload the document to the URL returned from the call, and then call <a>UpdateDocumentVersion</a>.</p> <p>To cancel the document upload, call <a>AbortDocumentVersionUpload</a>.</p>', 'RemoveAllResourcePermissions' => '<p>Removes all the permissions from the specified resource.</p>', 'RemoveResourcePermission' => '<p>Removes the permission for the specified principal from the specified resource.</p>', 'UpdateDocument' => '<p>Updates the specified attributes of the specified document. The user must have access to both the document and its parent folder, if applicable.</p>', 'UpdateDocumentVersion' => '<p>Changes the status of the document version to ACTIVE. </p> <p>Amazon WorkDocs also sets its document container to ACTIVE. This is the last step in a document upload, after the client uploads the document to an S3-presigned URL returned by <a>InitiateDocumentVersionUpload</a>. </p>', 'UpdateFolder' => '<p>Updates the specified attributes of the specified folder. The user must have access to both the folder and its parent folder, if applicable.</p>', 'UpdateUser' => '<p>Updates the specified attributes of the specified user, and grants or revokes administrative privileges to the Amazon WorkDocs site.</p>', ], 'shapes' => [ 'AbortDocumentVersionUploadRequest' => [ 'base' => NULL, 'refs' => [], ], 'ActivateUserRequest' => [ 'base' => NULL, 'refs' => [], ], 'ActivateUserResponse' => [ 'base' => NULL, 'refs' => [], ], 'AddResourcePermissionsRequest' => [ 'base' => NULL, 'refs' => [], ], 'AddResourcePermissionsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ConcurrentModificationException' => [ 'base' => '<p>The resource hierarchy is changing.</p>', 'refs' => [], ], 'CreateFolderRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateFolderResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateNotificationSubscriptionRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateNotificationSubscriptionResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateUserRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateUserResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeactivateUserRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeactivatingLastSystemUserException' => [ 'base' => '<p>The last user in the organization is being deactivated.</p>', 'refs' => [], ], 'DeleteDocumentRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteFolderContentsRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteFolderRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteNotificationSubscriptionRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteUserRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeDocumentVersionsRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeDocumentVersionsResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeFolderContentsRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeFolderContentsResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeNotificationSubscriptionsRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeNotificationSubscriptionsResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeResourcePermissionsRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeResourcePermissionsResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeUsersRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeUsersResponse' => [ 'base' => NULL, 'refs' => [], ], 'DocumentContentType' => [ 'base' => NULL, 'refs' => [ 'DocumentVersionMetadata$ContentType' => '<p>The content type of the document.</p>', 'InitiateDocumentVersionUploadRequest$ContentType' => '<p>The content type of the document.</p>', ], ], 'DocumentMetadata' => [ 'base' => '<p>Describes the document.</p>', 'refs' => [ 'DocumentMetadataList$member' => NULL, 'GetDocumentResponse$Metadata' => '<p>The document object.</p>', 'InitiateDocumentVersionUploadResponse$Metadata' => '<p>The document metadata.</p>', ], ], 'DocumentMetadataList' => [ 'base' => NULL, 'refs' => [ 'DescribeFolderContentsResponse$Documents' => '<p>The documents in the specified folder.</p>', ], ], 'DocumentSourceType' => [ 'base' => NULL, 'refs' => [ 'DocumentSourceUrlMap$key' => NULL, ], ], 'DocumentSourceUrlMap' => [ 'base' => NULL, 'refs' => [ 'DocumentVersionMetadata$Source' => '<p>The source of the document.</p>', ], ], 'DocumentStatusType' => [ 'base' => NULL, 'refs' => [ 'DocumentVersionMetadata$Status' => '<p>The status of the document.</p>', ], ], 'DocumentThumbnailType' => [ 'base' => NULL, 'refs' => [ 'DocumentThumbnailUrlMap$key' => NULL, ], ], 'DocumentThumbnailUrlMap' => [ 'base' => NULL, 'refs' => [ 'DocumentVersionMetadata$Thumbnail' => '<p>The thumbnail of the document.</p>', ], ], 'DocumentVersionIdType' => [ 'base' => NULL, 'refs' => [ 'AbortDocumentVersionUploadRequest$VersionId' => '<p>The ID of the version.</p>', 'DocumentVersionMetadata$Id' => '<p>The ID of the version.</p>', 'GetDocumentVersionRequest$VersionId' => '<p>The version ID of the document.</p>', 'UpdateDocumentVersionRequest$VersionId' => '<p>The version ID of the document.</p>', ], ], 'DocumentVersionMetadata' => [ 'base' => '<p>Describes a version of a document.</p>', 'refs' => [ 'DocumentMetadata$LatestVersionMetadata' => '<p>The latest version of the document.</p>', 'DocumentVersionMetadataList$member' => NULL, 'GetDocumentVersionResponse$Metadata' => '<p>The version metadata.</p>', ], ], 'DocumentVersionMetadataList' => [ 'base' => NULL, 'refs' => [ 'DescribeDocumentVersionsResponse$DocumentVersions' => '<p>The document versions.</p>', ], ], 'DocumentVersionStatus' => [ 'base' => NULL, 'refs' => [ 'UpdateDocumentVersionRequest$VersionStatus' => '<p>The status of the version.</p>', ], ], 'EmailAddressType' => [ 'base' => NULL, 'refs' => [ 'User$EmailAddress' => '<p>The email address of the user.</p>', ], ], 'EntityAlreadyExistsException' => [ 'base' => '<p>The resource already exists.</p>', 'refs' => [], ], 'EntityIdList' => [ 'base' => NULL, 'refs' => [ 'EntityNotExistsException$EntityIds' => NULL, ], ], 'EntityNotExistsException' => [ 'base' => '<p>The resource does not exist.</p>', 'refs' => [], ], 'ErrorMessageType' => [ 'base' => NULL, 'refs' => [ 'ConcurrentModificationException$Message' => NULL, 'EntityAlreadyExistsException$Message' => NULL, 'EntityNotExistsException$Message' => NULL, 'FailedDependencyException$Message' => NULL, 'IllegalUserStateException$Message' => NULL, 'InvalidArgumentException$Message' => NULL, 'InvalidOperationException$Message' => NULL, 'LimitExceededException$Message' => NULL, 'ProhibitedStateException$Message' => NULL, 'ServiceUnavailableException$Message' => NULL, 'StorageLimitExceededException$Message' => NULL, 'StorageLimitWillExceedException$Message' => NULL, 'TooManySubscriptionsException$Message' => NULL, 'UnauthorizedResourceAccessException$Message' => NULL, ], ], 'FailedDependencyException' => [ 'base' => '<p>The AWS Directory Service cannot reach an on-premises instance. Or a dependency under the control of the organization is failing, such as a connected active directory.</p>', 'refs' => [], ], 'FieldNamesType' => [ 'base' => NULL, 'refs' => [ 'DescribeDocumentVersionsRequest$Include' => '<p>A comma-separated list of values. Specify "INITIALIZED" to include incomplete versions.</p>', 'DescribeDocumentVersionsRequest$Fields' => '<p>Specify "SOURCE" to include initialized versions and a URL for the source document.</p>', 'DescribeFolderContentsRequest$Include' => '<p>The contents to include. Specify "INITIALIZED" to include initialized documents.</p>', 'DescribeUsersRequest$Fields' => '<p>A comma-separated list of values. Specify "STORAGE_METADATA" to include the user storage quota and utilization information.</p>', 'GetDocumentPathRequest$Fields' => '<p>A comma-separated list of values. Specify "NAME" to include the names of the parent folders.</p>', 'GetDocumentVersionRequest$Fields' => '<p>A comma-separated list of values. Specify "SOURCE" to include a URL for the source document.</p>', 'GetFolderPathRequest$Fields' => '<p>A comma-separated list of values. Specify "NAME" to include the names of the parent folders.</p>', ], ], 'FolderContentType' => [ 'base' => NULL, 'refs' => [ 'DescribeFolderContentsRequest$Type' => '<p>The type of items.</p>', ], ], 'FolderMetadata' => [ 'base' => '<p>Describes a folder.</p>', 'refs' => [ 'CreateFolderResponse$Metadata' => '<p>The metadata of the folder.</p>', 'FolderMetadataList$member' => NULL, 'GetFolderResponse$Metadata' => '<p>The metadata of the folder.</p>', ], ], 'FolderMetadataList' => [ 'base' => NULL, 'refs' => [ 'DescribeFolderContentsResponse$Folders' => '<p>The sub-folders in the specified folder.</p>', ], ], 'GetDocumentPathRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDocumentPathResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetDocumentRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDocumentResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetDocumentVersionRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDocumentVersionResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetFolderPathRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetFolderPathResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetFolderRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetFolderResponse' => [ 'base' => NULL, 'refs' => [], ], 'HashType' => [ 'base' => NULL, 'refs' => [ 'DocumentVersionMetadata$Signature' => '<p>The signature of the document.</p>', 'FolderMetadata$Signature' => '<p>The unique identifier created from the subfolders and documents of the folder.</p>', ], ], 'HeaderNameType' => [ 'base' => NULL, 'refs' => [ 'SignedHeaderMap$key' => NULL, ], ], 'HeaderValueType' => [ 'base' => NULL, 'refs' => [ 'SignedHeaderMap$value' => NULL, ], ], 'IdType' => [ 'base' => NULL, 'refs' => [ 'ActivateUserRequest$UserId' => '<p>The ID of the user.</p>', 'CreateNotificationSubscriptionRequest$OrganizationId' => '<p>The ID of the organization.</p>', 'CreateUserRequest$OrganizationId' => '<p>The ID of the organization.</p>', 'DeactivateUserRequest$UserId' => '<p>The ID of the user.</p>', 'DeleteNotificationSubscriptionRequest$SubscriptionId' => '<p>The ID of the subscription.</p>', 'DeleteNotificationSubscriptionRequest$OrganizationId' => '<p>The ID of the organization.</p>', 'DeleteUserRequest$UserId' => '<p>The ID of the user.</p>', 'DescribeNotificationSubscriptionsRequest$OrganizationId' => '<p>The ID of the organization.</p>', 'DescribeUsersRequest$OrganizationId' => '<p>The ID of the organization.</p>', 'DocumentMetadata$CreatorId' => '<p>The ID of the creator.</p>', 'DocumentVersionMetadata$CreatorId' => '<p>The ID of the creator.</p>', 'EntityIdList$member' => NULL, 'FolderMetadata$CreatorId' => '<p>The ID of the creator.</p>', 'GetDocumentPathRequest$DocumentId' => '<p>The ID of the document.</p>', 'GetFolderPathRequest$FolderId' => '<p>The ID of the folder.</p>', 'Principal$Id' => '<p>The ID of the resource.</p>', 'RemoveResourcePermissionRequest$PrincipalId' => '<p>The principal ID of the resource.</p>', 'ResourcePathComponent$Id' => '<p>The ID of the resource path.</p>', 'SharePrincipal$Id' => '<p>The ID of the recipient.</p>', 'ShareResult$PrincipalId' => '<p>The ID of the principal.</p>', 'Subscription$SubscriptionId' => '<p>The ID of the subscription.</p>', 'UpdateUserRequest$UserId' => '<p>The ID of the user.</p>', 'User$Id' => '<p>The ID of the user.</p>', 'User$OrganizationId' => '<p>The ID of the organization.</p>', ], ], 'IllegalUserStateException' => [ 'base' => '<p>The user is undergoing transfer of ownership.</p>', 'refs' => [], ], 'InitiateDocumentVersionUploadRequest' => [ 'base' => NULL, 'refs' => [], ], 'InitiateDocumentVersionUploadResponse' => [ 'base' => NULL, 'refs' => [], ], 'InvalidArgumentException' => [ 'base' => '<p>The pagination marker and/or limit fields are not valid.</p>', 'refs' => [], ], 'InvalidOperationException' => [ 'base' => '<p>The operation is invalid.</p>', 'refs' => [], ], 'LimitExceededException' => [ 'base' => '<p>You\'ve exceeded the maximum of 100,000 folders under the parent folder.</p>', 'refs' => [], ], 'LimitType' => [ 'base' => NULL, 'refs' => [ 'DescribeDocumentVersionsRequest$Limit' => '<p>The maximum number of versions to return with this call.</p>', 'DescribeFolderContentsRequest$Limit' => '<p>The maximum number of items to return with this call.</p>', 'DescribeNotificationSubscriptionsRequest$Limit' => '<p>The maximum number of items to return with this call.</p>', 'DescribeResourcePermissionsRequest$Limit' => '<p>The maximum number of items to return with this call.</p>', 'DescribeUsersRequest$Limit' => '<p>The maximum number of items to return.</p>', 'GetDocumentPathRequest$Limit' => '<p>The maximum number of levels in the hierarchy to return.</p>', 'GetFolderPathRequest$Limit' => '<p>The maximum number of levels in the hierarchy to return.</p>', ], ], 'LocaleType' => [ 'base' => NULL, 'refs' => [ 'UpdateUserRequest$Locale' => '<p>The locale of the user.</p>', 'User$Locale' => '<p>The locale of the user.</p>', ], ], 'MessageType' => [ 'base' => NULL, 'refs' => [ 'ShareResult$StatusMessage' => '<p>The status message.</p>', ], ], 'OrderType' => [ 'base' => NULL, 'refs' => [ 'DescribeFolderContentsRequest$Order' => '<p>The order for the contents of the folder.</p>', 'DescribeUsersRequest$Order' => '<p>The order for the results.</p>', ], ], 'OrganizationUserList' => [ 'base' => NULL, 'refs' => [ 'DescribeUsersResponse$Users' => '<p>The users.</p>', ], ], 'PageMarkerType' => [ 'base' => NULL, 'refs' => [ 'DescribeDocumentVersionsRequest$Marker' => '<p>The marker for the next set of results. (You received this marker from a previous call.)</p>', 'DescribeDocumentVersionsResponse$Marker' => '<p>The marker to use when requesting the next set of results. If there are no additional results, the string is empty.</p>', 'DescribeFolderContentsRequest$Marker' => '<p>The marker for the next set of results. (You received this marker from a previous call.)</p>', 'DescribeFolderContentsResponse$Marker' => '<p>The marker to use when requesting the next set of results. If there are no additional results, the string is empty.</p>', 'DescribeNotificationSubscriptionsRequest$Marker' => '<p>The marker for the next set of results. (You received this marker from a previous call.)</p>', 'DescribeNotificationSubscriptionsResponse$Marker' => '<p>The marker to use when requesting the next set of results. If there are no additional results, the string is empty.</p>', 'DescribeResourcePermissionsRequest$Marker' => '<p>The marker for the next set of results. (You received this marker from a previous call)</p>', 'DescribeResourcePermissionsResponse$Marker' => '<p>The marker to use when requesting the next set of results. If there are no additional results, the string is empty.</p>', 'DescribeUsersRequest$Marker' => '<p>The marker for the next set of results. (You received this marker from a previous call.)</p>', 'DescribeUsersResponse$Marker' => '<p>The marker to use when requesting the next set of results. If there are no additional results, the string is empty.</p>', 'GetDocumentPathRequest$Marker' => '<p>This value is not supported.</p>', 'GetFolderPathRequest$Marker' => '<p>This value is not supported.</p>', ], ], 'PasswordType' => [ 'base' => NULL, 'refs' => [ 'CreateUserRequest$Password' => '<p>The password of the user.</p>', ], ], 'PermissionInfo' => [ 'base' => '<p>Describes the permissions.</p>', 'refs' => [ 'PermissionInfoList$member' => NULL, ], ], 'PermissionInfoList' => [ 'base' => NULL, 'refs' => [ 'Principal$Roles' => '<p>The permission information for the resource.</p>', ], ], 'PositiveSizeType' => [ 'base' => NULL, 'refs' => [ 'StorageRuleType$StorageAllocatedInBytes' => '<p>The amount of storage allocated, in bytes.</p>', ], ], 'Principal' => [ 'base' => '<p>Describes a resource.</p>', 'refs' => [ 'PrincipalList$member' => NULL, ], ], 'PrincipalList' => [ 'base' => NULL, 'refs' => [ 'DescribeResourcePermissionsResponse$Principals' => '<p>The principals.</p>', ], ], 'PrincipalType' => [ 'base' => NULL, 'refs' => [ 'Principal$Type' => '<p>The type of resource.</p>', 'RemoveResourcePermissionRequest$PrincipalType' => '<p>The principal type of the resource.</p>', 'SharePrincipal$Type' => '<p>The type of the recipient.</p>', ], ], 'ProhibitedStateException' => [ 'base' => '<p>The specified document version is not in the INITIALIZED state.</p>', 'refs' => [], ], 'RemoveAllResourcePermissionsRequest' => [ 'base' => NULL, 'refs' => [], ], 'RemoveResourcePermissionRequest' => [ 'base' => NULL, 'refs' => [], ], 'ResourceIdType' => [ 'base' => NULL, 'refs' => [ 'AbortDocumentVersionUploadRequest$DocumentId' => '<p>The ID of the document.</p>', 'AddResourcePermissionsRequest$ResourceId' => '<p>The ID of the resource.</p>', 'CreateFolderRequest$ParentFolderId' => '<p>The ID of the parent folder.</p>', 'DeleteDocumentRequest$DocumentId' => '<p>The ID of the document.</p>', 'DeleteFolderContentsRequest$FolderId' => '<p>The ID of the folder.</p>', 'DeleteFolderRequest$FolderId' => '<p>The ID of the folder.</p>', 'DescribeDocumentVersionsRequest$DocumentId' => '<p>The ID of the document.</p>', 'DescribeFolderContentsRequest$FolderId' => '<p>The ID of the folder.</p>', 'DescribeResourcePermissionsRequest$ResourceId' => '<p>The ID of the resource.</p>', 'DocumentMetadata$Id' => '<p>The ID of the document.</p>', 'DocumentMetadata$ParentFolderId' => '<p>The ID of the parent folder.</p>', 'FolderMetadata$Id' => '<p>The ID of the folder.</p>', 'FolderMetadata$ParentFolderId' => '<p>The ID of the parent folder.</p>', 'GetDocumentRequest$DocumentId' => '<p>The ID of the document object.</p>', 'GetDocumentVersionRequest$DocumentId' => '<p>The ID of the document.</p>', 'GetFolderRequest$FolderId' => '<p>The ID of the folder.</p>', 'InitiateDocumentVersionUploadRequest$Id' => '<p>The ID of the document.</p>', 'InitiateDocumentVersionUploadRequest$ParentFolderId' => '<p>The ID of the parent folder.</p>', 'RemoveAllResourcePermissionsRequest$ResourceId' => '<p>The ID of the resource.</p>', 'RemoveResourcePermissionRequest$ResourceId' => '<p>The ID of the resource.</p>', 'ShareResult$ShareId' => '<p>The ID of the resource that was shared.</p>', 'UpdateDocumentRequest$DocumentId' => '<p>The ID of the document.</p>', 'UpdateDocumentRequest$ParentFolderId' => '<p>The ID of the parent folder.</p>', 'UpdateDocumentVersionRequest$DocumentId' => '<p>The ID of the document.</p>', 'UpdateFolderRequest$FolderId' => '<p>The ID of the folder.</p>', 'UpdateFolderRequest$ParentFolderId' => '<p>The ID of the parent folder.</p>', 'User$RootFolderId' => '<p>The ID of the root folder.</p>', 'User$RecycleBinFolderId' => '<p>The ID of the recycle bin folder.</p>', ], ], 'ResourceNameType' => [ 'base' => NULL, 'refs' => [ 'CreateFolderRequest$Name' => '<p>The name of the new folder.</p>', 'DocumentVersionMetadata$Name' => '<p>The name of the version.</p>', 'FolderMetadata$Name' => '<p>The name of the folder.</p>', 'InitiateDocumentVersionUploadRequest$Name' => '<p>The name of the document.</p>', 'ResourcePathComponent$Name' => '<p>The name of the resource path.</p>', 'UpdateDocumentRequest$Name' => '<p>The name of the document.</p>', 'UpdateFolderRequest$Name' => '<p>The name of the folder.</p>', ], ], 'ResourcePath' => [ 'base' => '<p>Describes the path information of a resource.</p>', 'refs' => [ 'GetDocumentPathResponse$Path' => '<p>The path information.</p>', 'GetFolderPathResponse$Path' => '<p>The path information.</p>', ], ], 'ResourcePathComponent' => [ 'base' => '<p>Describes the resource path.</p>', 'refs' => [ 'ResourcePathComponentList$member' => NULL, ], ], 'ResourcePathComponentList' => [ 'base' => NULL, 'refs' => [ 'ResourcePath$Components' => '<p>The components of the resource path.</p>', ], ], 'ResourceSortType' => [ 'base' => NULL, 'refs' => [ 'DescribeFolderContentsRequest$Sort' => '<p>The sorting criteria.</p>', ], ], 'ResourceStateType' => [ 'base' => NULL, 'refs' => [ 'DocumentMetadata$ResourceState' => '<p>The resource state.</p>', 'FolderMetadata$ResourceState' => '<p>The resource state of the folder.</p>', 'UpdateDocumentRequest$ResourceState' => '<p>The resource state of the document. Note that only ACTIVE and RECYCLED are supported.</p>', 'UpdateFolderRequest$ResourceState' => '<p>The resource state of the folder. Note that only ACTIVE and RECYCLED are accepted values from the API.</p>', ], ], 'RolePermissionType' => [ 'base' => NULL, 'refs' => [ 'PermissionInfo$Type' => '<p>The type of permissions.</p>', ], ], 'RoleType' => [ 'base' => NULL, 'refs' => [ 'PermissionInfo$Role' => '<p>The role of the user.</p>', 'SharePrincipal$Role' => '<p>The role of the recipient.</p>', 'ShareResult$Role' => '<p>The role.</p>', ], ], 'SearchQueryType' => [ 'base' => NULL, 'refs' => [ 'DescribeUsersRequest$Query' => '<p>A query to filter users by user name.</p>', ], ], 'ServiceUnavailableException' => [ 'base' => '<p>One or more of the dependencies is unavailable.</p>', 'refs' => [], ], 'SharePrincipal' => [ 'base' => '<p>Describes the recipient type and ID, if available.</p>', 'refs' => [ 'SharePrincipalList$member' => NULL, ], ], 'SharePrincipalList' => [ 'base' => NULL, 'refs' => [ 'AddResourcePermissionsRequest$Principals' => '<p>The users, groups, or organization being granted permission.</p>', ], ], 'ShareResult' => [ 'base' => '<p>Describes the share results of a resource.</p>', 'refs' => [ 'ShareResultsList$member' => NULL, ], ], 'ShareResultsList' => [ 'base' => NULL, 'refs' => [ 'AddResourcePermissionsResponse$ShareResults' => '<p>The share results.</p>', ], ], 'ShareStatusType' => [ 'base' => NULL, 'refs' => [ 'ShareResult$Status' => '<p>The status.</p>', ], ], 'SignedHeaderMap' => [ 'base' => NULL, 'refs' => [ 'UploadMetadata$SignedHeaders' => '<p>The signed headers.</p>', ], ], 'SizeType' => [ 'base' => NULL, 'refs' => [ 'DescribeUsersResponse$TotalNumberOfUsers' => '<p>The total number of users included in the results.</p>', 'DocumentVersionMetadata$Size' => '<p>The size of the document, in bytes.</p>', 'InitiateDocumentVersionUploadRequest$DocumentSizeInBytes' => '<p>The size of the document, in bytes.</p>', 'UserStorageMetadata$StorageUtilizedInBytes' => '<p>The amount of storage utilized, in bytes.</p>', ], ], 'StorageLimitExceededException' => [ 'base' => '<p>The storage limit has been exceeded.</p>', 'refs' => [], ], 'StorageLimitWillExceedException' => [ 'base' => '<p>The storage limit will be exceeded.</p>', 'refs' => [], ], 'StorageRuleType' => [ 'base' => '<p>Describes the storage for a user.</p>', 'refs' => [ 'CreateUserRequest$StorageRule' => '<p>The amount of storage for the user.</p>', 'UpdateUserRequest$StorageRule' => '<p>The amount of storage for the user.</p>', 'UserStorageMetadata$StorageRule' => '<p>The storage for a user.</p>', ], ], 'StorageType' => [ 'base' => NULL, 'refs' => [ 'StorageRuleType$StorageType' => '<p>The type of storage.</p>', ], ], 'Subscription' => [ 'base' => '<p>Describes a subscription.</p>', 'refs' => [ 'CreateNotificationSubscriptionResponse$Subscription' => '<p>The subscription.</p>', 'SubscriptionList$member' => NULL, ], ], 'SubscriptionEndPointType' => [ 'base' => NULL, 'refs' => [ 'CreateNotificationSubscriptionRequest$Endpoint' => '<p>The endpoint to receive the notifications. If the protocol is HTTPS, the endpoint is a URL that begins with "https://".</p>', 'Subscription$EndPoint' => '<p>The endpoint of the subscription.</p>', ], ], 'SubscriptionList' => [ 'base' => NULL, 'refs' => [ 'DescribeNotificationSubscriptionsResponse$Subscriptions' => '<p>The subscriptions.</p>', ], ], 'SubscriptionProtocolType' => [ 'base' => NULL, 'refs' => [ 'CreateNotificationSubscriptionRequest$Protocol' => '<p>The protocol to use. The supported value is https, which delivers JSON-encoded messasges using HTTPS POST.</p>', 'Subscription$Protocol' => '<p>The protocol of the subscription.</p>', ], ], 'SubscriptionType' => [ 'base' => NULL, 'refs' => [ 'CreateNotificationSubscriptionRequest$SubscriptionType' => '<p>The notification type.</p>', ], ], 'TimeZoneIdType' => [ 'base' => NULL, 'refs' => [ 'CreateUserRequest$TimeZoneId' => '<p>The time zone ID of the user.</p>', 'UpdateUserRequest$TimeZoneId' => '<p>The time zone ID of the user.</p>', 'User$TimeZoneId' => '<p>The time zone ID of the user.</p>', ], ], 'TimestampType' => [ 'base' => NULL, 'refs' => [ 'DocumentMetadata$CreatedTimestamp' => '<p>The time when the document was created.</p>', 'DocumentMetadata$ModifiedTimestamp' => '<p>The time when the document was updated.</p>', 'DocumentVersionMetadata$CreatedTimestamp' => '<p>The time stamp when the document was first uploaded.</p>', 'DocumentVersionMetadata$ModifiedTimestamp' => '<p>The time stamp when the document was last uploaded.</p>', 'DocumentVersionMetadata$ContentCreatedTimestamp' => '<p>The time stamp when the content of the document was originally created.</p>', 'DocumentVersionMetadata$ContentModifiedTimestamp' => '<p>The time stamp when the content of the document was modified.</p>', 'FolderMetadata$CreatedTimestamp' => '<p>The time when the folder was created.</p>', 'FolderMetadata$ModifiedTimestamp' => '<p>The time when the folder was updated.</p>', 'InitiateDocumentVersionUploadRequest$ContentCreatedTimestamp' => '<p>The time stamp when the content of the document was originally created.</p>', 'InitiateDocumentVersionUploadRequest$ContentModifiedTimestamp' => '<p>The time stamp when the content of the document was modified.</p>', 'User$CreatedTimestamp' => '<p>The time when the user was created.</p>', 'User$ModifiedTimestamp' => '<p>The time when the user was modified.</p>', ], ], 'TooManySubscriptionsException' => [ 'base' => '<p>You\'ve reached the limit on the number of subscriptions for the WorkDocs instance.</p>', 'refs' => [], ], 'UnauthorizedOperationException' => [ 'base' => '<p>The operation is not permitted.</p>', 'refs' => [], ], 'UnauthorizedResourceAccessException' => [ 'base' => '<p>The caller does not have access to perform the action on the resource.</p>', 'refs' => [], ], 'UpdateDocumentRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateDocumentVersionRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateFolderRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateUserRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateUserResponse' => [ 'base' => NULL, 'refs' => [], ], 'UploadMetadata' => [ 'base' => '<p>Describes the upload.</p>', 'refs' => [ 'InitiateDocumentVersionUploadResponse$UploadMetadata' => '<p>The upload metadata.</p>', ], ], 'UrlType' => [ 'base' => NULL, 'refs' => [ 'DocumentSourceUrlMap$value' => NULL, 'DocumentThumbnailUrlMap$value' => NULL, 'UploadMetadata$UploadUrl' => '<p>The URL of the upload.</p>', ], ], 'User' => [ 'base' => '<p>Describes a user.</p>', 'refs' => [ 'ActivateUserResponse$User' => '<p>The user information.</p>', 'CreateUserResponse$User' => '<p>The user information.</p>', 'OrganizationUserList$member' => NULL, 'UpdateUserResponse$User' => '<p>The user information.</p>', ], ], 'UserAttributeValueType' => [ 'base' => NULL, 'refs' => [ 'CreateUserRequest$GivenName' => '<p>The given name of the user.</p>', 'CreateUserRequest$Surname' => '<p>The surname of the user.</p>', 'UpdateUserRequest$GivenName' => '<p>The given name of the user.</p>', 'UpdateUserRequest$Surname' => '<p>The surname of the user.</p>', 'User$GivenName' => '<p>The given name of the user.</p>', 'User$Surname' => '<p>The surname of the user.</p>', ], ], 'UserFilterType' => [ 'base' => NULL, 'refs' => [ 'DescribeUsersRequest$Include' => '<p>The state of the users. Specify "ALL" to include inactive users.</p>', ], ], 'UserIdsType' => [ 'base' => NULL, 'refs' => [ 'DescribeUsersRequest$UserIds' => '<p>The IDs of the users.</p>', ], ], 'UserSortType' => [ 'base' => NULL, 'refs' => [ 'DescribeUsersRequest$Sort' => '<p>The sorting criteria.</p>', ], ], 'UserStatusType' => [ 'base' => NULL, 'refs' => [ 'User$Status' => '<p>The status of the user.</p>', ], ], 'UserStorageMetadata' => [ 'base' => '<p>Describes the storage for a user.</p>', 'refs' => [ 'User$Storage' => '<p>The storage for the user.</p>', ], ], 'UserType' => [ 'base' => NULL, 'refs' => [ 'UpdateUserRequest$Type' => '<p>The type of the user.</p>', 'User$Type' => '<p>The type of user.</p>', ], ], 'UsernameType' => [ 'base' => NULL, 'refs' => [ 'CreateUserRequest$Username' => '<p>The login name of the user.</p>', 'User$Username' => '<p>The login name of the user.</p>', ], ], ],];
