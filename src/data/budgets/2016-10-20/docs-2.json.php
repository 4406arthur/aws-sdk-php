<?php
// This file was auto-generated from sdk-root/src/data/budgets/2016-10-20/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Budgets enable you to plan your service usage, service costs, and your RI utilization. You can also track how close your plan is to your budgeted amount or to the free tier limits. Budgets provide you with a quick way to see your usage-to-date and current estimated charges from AWS and to see how much your predicted usage accrues in charges by the end of the month. Budgets also compare current estimates and charges to the amount that you indicated you want to use or spend and lets you see how much of your budget has been used. AWS updates your budget status several times a day. Budgets track your unblended costs, subscriptions, and refunds. You can create the following types of budgets:</p> <ul> <li> <p>Cost budgets allow you to say how much you want to spend on a service.</p> </li> <li> <p>Usage budgets allow you to say how many hours you want to use for one or more services.</p> </li> <li> <p>RI utilization budgets allow you to define a utilization threshold and receive alerts when RIs are tracking below that threshold.</p> </li> </ul> <p>You can create up to 20,000 budgets per AWS master account. Your first two budgets are free of charge. Each additional budget costs $0.02 per day. You can set up optional notifications that warn you if you exceed, or are forecasted to exceed, your budgeted amount. You can have notifications sent to an Amazon SNS topic, to an email address, or to both. For more information, see <a href="https://docs.aws.amazon.com/awsaccountbilling/latest/aboutv2/budgets-sns-policy.html">Creating an Amazon SNS Topic for Budget Notifications</a>. AWS Free Tier usage alerts via AWS Budgets are provided for you, and do not count toward your budget limits.</p> <p>Service Endpoint</p> <p>The AWS Budgets API provides the following endpoint:</p> <ul> <li> <p>https://budgets.us-east-1.amazonaws.com</p> </li> </ul>', 'operations' => [ 'CreateBudget' => '<p>Creates a budget and, if included, notifications and subscribers. </p>', 'CreateNotification' => '<p>Creates a notification. You must create the budget before you create the associated notification.</p>', 'CreateSubscriber' => '<p>Creates a subscriber. You must create the associated budget and notification before you create the subscriber.</p>', 'DeleteBudget' => '<p>Deletes a budget. You can delete your budget at any time.</p> <p> <b>Deleting a budget also deletes the notifications and subscribers associated with that budget.</b> </p>', 'DeleteNotification' => '<p>Deletes a notification.</p> <p> <b>Deleting a notification also deletes the subscribers associated with the notification.</b> </p>', 'DeleteSubscriber' => '<p>Deletes a subscriber.</p> <p> <b>Deleting the last subscriber to a notification also deletes the notification.</b> </p>', 'DescribeBudget' => '<p>Describes a budget.</p>', 'DescribeBudgets' => '<p>Lists the budgets associated with an account.</p>', 'DescribeNotificationsForBudget' => '<p>Lists the notifications associated with a budget.</p>', 'DescribeSubscribersForNotification' => '<p>Lists the subscribers associated with a notification.</p>', 'UpdateBudget' => '<p>Updates a budget. You can change every part of a budget except for the <code>budgetName</code> and the <code>calculatedSpend</code>. When a budget is modified, the <code>calculatedSpend</code> drops to zero until AWS has new usage data to use for forecasting.</p>', 'UpdateNotification' => '<p>Updates a notification.</p>', 'UpdateSubscriber' => '<p>Updates a subscriber.</p>', ], 'shapes' => [ 'AccountId' => [ 'base' => '<p>The account ID of the customer. It should be a 12 digit number.</p>', 'refs' => [ 'CreateBudgetRequest$AccountId' => '<p>The <code>accountId</code> that is associated with the budget.</p>', 'CreateNotificationRequest$AccountId' => '<p>The <code>accountId</code> that is associated with the budget that you want to create a notification for.</p>', 'CreateSubscriberRequest$AccountId' => '<p>The <code>accountId</code> associated with the budget that you want to create a subscriber for.</p>', 'DeleteBudgetRequest$AccountId' => '<p>The <code>accountId</code> that is associated with the budget that you want to delete.</p>', 'DeleteNotificationRequest$AccountId' => '<p>The <code>accountId</code> that is associated with the budget whose notification you want to delete.</p>', 'DeleteSubscriberRequest$AccountId' => '<p>The <code>accountId</code> that is associated with the budget whose subscriber you want to delete.</p>', 'DescribeBudgetRequest$AccountId' => '<p>The <code>accountId</code> that is associated with the budget that you want a description of.</p>', 'DescribeBudgetsRequest$AccountId' => '<p>The <code>accountId</code> that is associated with the budgets that you want descriptions of.</p>', 'DescribeNotificationsForBudgetRequest$AccountId' => '<p>The <code>accountId</code> that is associated with the budget whose notifications you want descriptions of.</p>', 'DescribeSubscribersForNotificationRequest$AccountId' => '<p>The <code>accountId</code> that is associated with the budget whose subscribers you want descriptions of.</p>', 'UpdateBudgetRequest$AccountId' => '<p>The <code>accountId</code> that is associated with the budget that you want to update.</p>', 'UpdateNotificationRequest$AccountId' => '<p>The <code>accountId</code> that is associated with the budget whose notification you want to update.</p>', 'UpdateSubscriberRequest$AccountId' => '<p>The <code>accountId</code> that is associated with the budget whose subscriber you want to update.</p>', ], ], 'Budget' => [ 'base' => '<p>Represents the output of the <code>CreateBudget</code> operation. The content consists of the detailed metadata and data file information, and the current status of the <code>budget</code>.</p> <p>The ARN pattern for a budget is: <code>arn:aws:budgetservice::AccountId:budget/budgetName</code> </p>', 'refs' => [ 'Budgets$member' => NULL, 'CreateBudgetRequest$Budget' => '<p>The budget object that you want to create.</p>', 'DescribeBudgetResponse$Budget' => '<p>The description of the budget.</p>', 'UpdateBudgetRequest$NewBudget' => '<p>The budget that you want to update your budget to.</p>', ], ], 'BudgetName' => [ 'base' => '<p> A string represents the budget name. No ":" and "\\" character is allowed.</p>', 'refs' => [ 'Budget$BudgetName' => '<p>The name of a budget. Unique within accounts. <code>:</code> and <code>\\</code> characters are not allowed in the <code>BudgetName</code>.</p>', 'CreateNotificationRequest$BudgetName' => '<p>The name of the budget that you want AWS to notified you about. Budget names must be unique within an account.</p>', 'CreateSubscriberRequest$BudgetName' => '<p>The name of the budget that you want to subscribe to. Budget names must be unique within an account.</p>', 'DeleteBudgetRequest$BudgetName' => '<p>The name of the budget that you want to delete.</p>', 'DeleteNotificationRequest$BudgetName' => '<p>The name of the budget whose notification you want to delete.</p>', 'DeleteSubscriberRequest$BudgetName' => '<p>The name of the budget whose subscriber you want to delete.</p>', 'DescribeBudgetRequest$BudgetName' => '<p>The name of the budget that you want a description of.</p>', 'DescribeNotificationsForBudgetRequest$BudgetName' => '<p>The name of the budget whose notifications you want descriptions of.</p>', 'DescribeSubscribersForNotificationRequest$BudgetName' => '<p>The name of the budget whose subscribers you want descriptions of.</p>', 'UpdateNotificationRequest$BudgetName' => '<p>The name of the budget whose notification you want to update.</p>', 'UpdateSubscriberRequest$BudgetName' => '<p>The name of the budget whose subscriber you want to update.</p>', ], ], 'BudgetType' => [ 'base' => '<p> The type of a budget. It should be COST, USAGE, or RI_UTILIZATION.</p>', 'refs' => [ 'Budget$BudgetType' => '<p>Whether this budget tracks monetary costs, usage, or RI utilization.</p>', ], ], 'Budgets' => [ 'base' => '<p> A list of budgets</p>', 'refs' => [ 'DescribeBudgetsResponse$Budgets' => '<p>A list of budgets.</p>', ], ], 'CalculatedSpend' => [ 'base' => '<p>The spend objects associated with this budget. The <code>actualSpend</code> tracks how much you\'ve used, cost, usage, or RI units, and the <code>forecastedSpend</code> tracks how much you are predicted to spend if your current usage remains steady.</p> <p>For example, if it is the 20th of the month and you have spent <code>50</code> dollars on Amazon EC2, your <code>actualSpend</code> is <code>50 USD</code>, and your <code>forecastedSpend</code> is <code>75 USD</code>.</p>', 'refs' => [ 'Budget$CalculatedSpend' => '<p>The actual and forecasted cost or usage being tracked by a budget.</p>', ], ], 'ComparisonOperator' => [ 'base' => '<p> The comparison operator of a notification. Currently we support less than, equal to and greater than.</p>', 'refs' => [ 'Notification$ComparisonOperator' => '<p>The comparison used for this notification.</p>', ], ], 'CostFilters' => [ 'base' => '<p> A map that represents the cost filters applied to the budget.</p>', 'refs' => [ 'Budget$CostFilters' => '<p>The cost filters applied to a budget, such as service or region.</p>', ], ], 'CostTypes' => [ 'base' => '<p>The types of cost included in a budget, such as tax and subscriptions.</p>', 'refs' => [ 'Budget$CostTypes' => '<p>The types of costs included in this budget.</p>', ], ], 'CreateBudgetRequest' => [ 'base' => '<p> Request of CreateBudget </p>', 'refs' => [], ], 'CreateBudgetResponse' => [ 'base' => '<p> Response of CreateBudget </p>', 'refs' => [], ], 'CreateNotificationRequest' => [ 'base' => '<p> Request of CreateNotification </p>', 'refs' => [], ], 'CreateNotificationResponse' => [ 'base' => '<p> Response of CreateNotification </p>', 'refs' => [], ], 'CreateSubscriberRequest' => [ 'base' => '<p> Request of CreateSubscriber </p>', 'refs' => [], ], 'CreateSubscriberResponse' => [ 'base' => '<p> Response of CreateSubscriber </p>', 'refs' => [], ], 'CreationLimitExceededException' => [ 'base' => '<p>You\'ve exceeded the notification or subscriber limit.</p>', 'refs' => [], ], 'DeleteBudgetRequest' => [ 'base' => '<p> Request of DeleteBudget </p>', 'refs' => [], ], 'DeleteBudgetResponse' => [ 'base' => '<p> Response of DeleteBudget </p>', 'refs' => [], ], 'DeleteNotificationRequest' => [ 'base' => '<p> Request of DeleteNotification </p>', 'refs' => [], ], 'DeleteNotificationResponse' => [ 'base' => '<p> Response of DeleteNotification </p>', 'refs' => [], ], 'DeleteSubscriberRequest' => [ 'base' => '<p> Request of DeleteSubscriber </p>', 'refs' => [], ], 'DeleteSubscriberResponse' => [ 'base' => '<p> Response of DeleteSubscriber </p>', 'refs' => [], ], 'DescribeBudgetRequest' => [ 'base' => '<p> Request of DescribeBudget </p>', 'refs' => [], ], 'DescribeBudgetResponse' => [ 'base' => '<p> Response of DescribeBudget </p>', 'refs' => [], ], 'DescribeBudgetsRequest' => [ 'base' => '<p> Request of DescribeBudgets </p>', 'refs' => [], ], 'DescribeBudgetsResponse' => [ 'base' => '<p> Response of DescribeBudgets </p>', 'refs' => [], ], 'DescribeNotificationsForBudgetRequest' => [ 'base' => '<p> Request of DescribeNotificationsForBudget </p>', 'refs' => [], ], 'DescribeNotificationsForBudgetResponse' => [ 'base' => '<p> Response of GetNotificationsForBudget </p>', 'refs' => [], ], 'DescribeSubscribersForNotificationRequest' => [ 'base' => '<p> Request of DescribeSubscribersForNotification </p>', 'refs' => [], ], 'DescribeSubscribersForNotificationResponse' => [ 'base' => '<p> Response of DescribeSubscribersForNotification </p>', 'refs' => [], ], 'DimensionValues' => [ 'base' => NULL, 'refs' => [ 'CostFilters$value' => NULL, ], ], 'DuplicateRecordException' => [ 'base' => '<p>The budget name already exists. Budget names must be unique within an account.</p>', 'refs' => [], ], 'ExpiredNextTokenException' => [ 'base' => '<p>The pagination token expired.</p>', 'refs' => [], ], 'GenericString' => [ 'base' => '<p> A generic String.</p>', 'refs' => [ 'CostFilters$key' => NULL, 'DescribeBudgetsRequest$NextToken' => '<p>The pagination token that indicates the next set of results to retrieve.</p>', 'DescribeBudgetsResponse$NextToken' => '<p>The pagination token that indicates the next set of results that you can retrieve.</p>', 'DescribeNotificationsForBudgetRequest$NextToken' => '<p>The pagination token that indicates the next set of results to retrieve.</p>', 'DescribeNotificationsForBudgetResponse$NextToken' => '<p>The pagination token that indicates the next set of results that you can retrieve.</p>', 'DescribeSubscribersForNotificationRequest$NextToken' => '<p>The pagination token that indicates the next set of results to retrieve.</p>', 'DescribeSubscribersForNotificationResponse$NextToken' => '<p>The pagination token that indicates the next set of results that you can retrieve.</p>', 'DimensionValues$member' => NULL, ], ], 'GenericTimestamp' => [ 'base' => '<p> A generic timestamp. In Java it is transformed to a Date object.</p>', 'refs' => [ 'TimePeriod$Start' => '<p>The start date for a budget. If you created your budget and didn\'t specify a start date, AWS defaults to the start of your chosen time period (i.e. DAILY, MONTHLY, QUARTERLY, ANNUALLY). For example, if you created your budget on January 24th 2018, chose <code>DAILY</code>, and didn\'t set a start date, AWS set your start date to <code>01/24/18 00:00 UTC</code>. If you chose <code>MONTHLY</code>, AWS set your start date to <code>01/01/18 00:00 UTC</code>. The defaults are the same for the AWS Billing and Cost Management console and the API.</p> <p>You can change your start date with the <code>UpdateBudget</code> operation.</p>', 'TimePeriod$End' => '<p>The end date for a budget. If you didn\'t specify an end date, AWS set your end date to <code>06/15/87 00:00 UTC</code>. The defaults are the same for the AWS Billing and Cost Management console and the API.</p> <p>After the end date, AWS deletes the budget and all associated notifications and subscribers. You can change your end date with the <code>UpdateBudget</code> operation.</p>', ], ], 'InternalErrorException' => [ 'base' => '<p>An error on the server occurred during the processing of your request. Try again later.</p>', 'refs' => [], ], 'InvalidNextTokenException' => [ 'base' => '<p>The pagination token is invalid.</p>', 'refs' => [], ], 'InvalidParameterException' => [ 'base' => '<p>An error on the client occurred. Typically, the cause is an invalid input value.</p>', 'refs' => [], ], 'MaxResults' => [ 'base' => '<p> An integer to represent how many entries a paginated response contains. Maximum is set to 100.</p>', 'refs' => [ 'DescribeBudgetsRequest$MaxResults' => '<p>Optional integer. Specifies the maximum number of results to return in response.</p>', 'DescribeNotificationsForBudgetRequest$MaxResults' => '<p>Optional integer. Specifies the maximum number of results to return in response.</p>', 'DescribeSubscribersForNotificationRequest$MaxResults' => '<p>Optional integer. Specifies the maximum number of results to return in response.</p>', ], ], 'NotFoundException' => [ 'base' => '<p>We can’t locate the resource that you specified.</p>', 'refs' => [], ], 'Notification' => [ 'base' => '<p>A notification associated with a budget. A budget can have up to five notifications. </p> <p>Each notification must have at least one subscriber. A notification can have one SNS subscriber and up to ten email subscribers, for a total of 11 subscribers.</p> <p>For example, if you have a budget for 200 dollars and you want to be notified when you go over 160 dollars, create a notification with the following parameters:</p> <ul> <li> <p>A notificationType of <code>ACTUAL</code> </p> </li> <li> <p>A comparisonOperator of <code>GREATER_THAN</code> </p> </li> <li> <p>A notification threshold of <code>80</code> </p> </li> </ul>', 'refs' => [ 'CreateNotificationRequest$Notification' => '<p>The notification that you want to create.</p>', 'CreateSubscriberRequest$Notification' => '<p>The notification that you want to create a subscriber for.</p>', 'DeleteNotificationRequest$Notification' => '<p>The notification that you want to delete.</p>', 'DeleteSubscriberRequest$Notification' => '<p>The notification whose subscriber you want to delete.</p>', 'DescribeSubscribersForNotificationRequest$Notification' => '<p>The notification whose subscribers you want to list.</p>', 'NotificationWithSubscribers$Notification' => '<p>The notification associated with a budget.</p>', 'Notifications$member' => NULL, 'UpdateNotificationRequest$OldNotification' => '<p>The previous notification associated with a budget.</p>', 'UpdateNotificationRequest$NewNotification' => '<p>The updated notification to be associated with a budget.</p>', 'UpdateSubscriberRequest$Notification' => '<p>The notification whose subscriber you want to update.</p>', ], ], 'NotificationThreshold' => [ 'base' => '<p> The threshold of a notification. It should be a number between 0 and 1,000,000,000.</p>', 'refs' => [ 'Notification$Threshold' => '<p>The threshold associated with a notification. Thresholds are always a percentage.</p>', ], ], 'NotificationType' => [ 'base' => '<p> The type of a notification. It should be ACTUAL or FORECASTED.</p>', 'refs' => [ 'Notification$NotificationType' => '<p>Whether the notification is for how much you have spent (<code>ACTUAL</code>) or for how much you are forecasted to spend (<code>FORECASTED</code>).</p>', ], ], 'NotificationWithSubscribers' => [ 'base' => '<p>A notification with subscribers. A notification can have one SNS subscriber and up to ten email subscribers, for a total of 11 subscribers.</p>', 'refs' => [ 'NotificationWithSubscribersList$member' => NULL, ], ], 'NotificationWithSubscribersList' => [ 'base' => '<p> A list of Notifications, each with a list of subscribers.</p>', 'refs' => [ 'CreateBudgetRequest$NotificationsWithSubscribers' => '<p>A notification that you want to associate with a budget. A budget can have up to five notifications, and each notification can have one SNS subscriber and up to ten email subscribers. If you include notifications and subscribers in your <code>CreateBudget</code> call, AWS creates the notifications and subscribers for you.</p>', ], ], 'Notifications' => [ 'base' => '<p> A list of notifications.</p>', 'refs' => [ 'DescribeNotificationsForBudgetResponse$Notifications' => '<p>A list of notifications associated with a budget.</p>', ], ], 'NullableBoolean' => [ 'base' => NULL, 'refs' => [ 'CostTypes$IncludeTax' => '<p>Specifies whether a budget includes taxes.</p> <p>The default value is <code>true</code>.</p>', 'CostTypes$IncludeSubscription' => '<p>Specifies whether a budget includes subscriptions.</p> <p>The default value is <code>true</code>.</p>', 'CostTypes$UseBlended' => '<p>Specifies whether a budget uses blended rate.</p> <p>The default value is <code>false</code>.</p>', 'CostTypes$IncludeRefund' => '<p>Specifies whether a budget includes refunds.</p> <p>The default value is <code>true</code>.</p>', 'CostTypes$IncludeCredit' => '<p>Specifies whether a budget includes credits.</p> <p>The default value is <code>true</code>.</p>', 'CostTypes$IncludeUpfront' => '<p>Specifies whether a budget includes upfront RI costs.</p> <p>The default value is <code>true</code>.</p>', 'CostTypes$IncludeRecurring' => '<p>Specifies whether a budget includes recurring fees such as monthly RI fees.</p> <p>The default value is <code>true</code>.</p>', 'CostTypes$IncludeOtherSubscription' => '<p>Specifies whether a budget includes non-RI subscription costs.</p> <p>The default value is <code>true</code>.</p>', 'CostTypes$IncludeSupport' => '<p>Specifies whether a budget includes support subscription fees.</p> <p>The default value is <code>true</code>.</p>', 'CostTypes$IncludeDiscount' => '<p>Specifies whether a budget includes discounts.</p> <p>The default value is <code>true</code>.</p>', 'CostTypes$UseAmortized' => '<p>Specifies whether a budget uses the amortized rate.</p> <p>The default value is <code>false</code>.</p>', ], ], 'NumericValue' => [ 'base' => '<p> A string to represent NumericValue.</p>', 'refs' => [ 'Spend$Amount' => '<p>The cost or usage amount associated with a budget forecast, actual spend, or budget threshold.</p>', ], ], 'Spend' => [ 'base' => '<p>The amount of cost or usage being measured for a budget.</p> <p>For example, a <code>Spend</code> for <code>3 GB</code> of S3 usage would have the following parameters:</p> <ul> <li> <p>An <code>Amount</code> of <code>3</code> </p> </li> <li> <p>A <code>unit</code> of <code>GB</code> </p> </li> </ul>', 'refs' => [ 'Budget$BudgetLimit' => '<p>The total amount of cost, usage, or RI utilization that you want to track with your budget.</p> <p> <code>BudgetLimit</code> is required for cost or usage budgets, but optional for RI utilization budgets. RI utilization budgets default to the only valid value for RI utilization budgets, which is <code>100</code>.</p>', 'CalculatedSpend$ActualSpend' => '<p>The amount of cost, usage, or RI units that you have used.</p>', 'CalculatedSpend$ForecastedSpend' => '<p>The amount of cost, usage, or RI units that you are forecasted to use.</p>', ], ], 'Subscriber' => [ 'base' => '<p>The subscriber to a budget notification. The subscriber consists of a subscription type and either an Amazon Simple Notification Service topic or an email address.</p> <p>For example, an email subscriber would have the following parameters:</p> <ul> <li> <p>A <code>subscriptionType</code> of <code>EMAIL</code> </p> </li> <li> <p>An <code>address</code> of <code>example@example.com</code> </p> </li> </ul>', 'refs' => [ 'CreateSubscriberRequest$Subscriber' => '<p>The subscriber that you want to associate with a budget notification.</p>', 'DeleteSubscriberRequest$Subscriber' => '<p>The subscriber that you want to delete.</p>', 'Subscribers$member' => NULL, 'UpdateSubscriberRequest$OldSubscriber' => '<p>The previous subscriber associated with a budget notification.</p>', 'UpdateSubscriberRequest$NewSubscriber' => '<p>The updated subscriber associated with a budget notification.</p>', ], ], 'SubscriberAddress' => [ 'base' => '<p> String containing email or sns topic for the subscriber address.</p>', 'refs' => [ 'Subscriber$Address' => '<p>The address that AWS sends budget notifications to, either an SNS topic or an email.</p>', ], ], 'Subscribers' => [ 'base' => '<p> A list of subscribers.</p>', 'refs' => [ 'CreateNotificationRequest$Subscribers' => '<p>A list of subscribers that you want to associate with the notification. Each notification can have one SNS subscriber and up to ten email subscribers.</p>', 'DescribeSubscribersForNotificationResponse$Subscribers' => '<p>A list of subscribers associated with a notification.</p>', 'NotificationWithSubscribers$Subscribers' => '<p>A list of subscribers who are subscribed to this notification.</p>', ], ], 'SubscriptionType' => [ 'base' => '<p> The subscription type of the subscriber. It can be SMS or EMAIL.</p>', 'refs' => [ 'Subscriber$SubscriptionType' => '<p>The type of notification that AWS sends to a subscriber.</p>', ], ], 'ThresholdType' => [ 'base' => '<p> The type of threshold for a notification. It can be PERCENTAGE or ABSOLUTE_VALUE.</p>', 'refs' => [ 'Notification$ThresholdType' => '<p>The type of threshold for a notification. For <code>ACTUAL</code> thresholds, AWS notifies you when you go over the threshold, and for <code>FORECASTED</code> thresholds AWS notifies you when you are forecasted to go over the threshold.</p>', ], ], 'TimePeriod' => [ 'base' => '<p>The period of time covered by a budget. Has a start date and an end date. The start date must come before the end date. There are no restrictions on the end date. </p>', 'refs' => [ 'Budget$TimePeriod' => '<p>The period of time covered by a budget. Has a start date and an end date. The start date must come before the end date. There are no restrictions on the end date. </p> <p>If you created your budget and didn\'t specify a start date, AWS defaults to the start of your chosen time period (i.e. DAILY, MONTHLY, QUARTERLY, ANNUALLY). For example, if you created your budget on January 24th 2018, chose <code>DAILY</code>, and didn\'t set a start date, AWS set your start date to <code>01/24/18 00:00 UTC</code>. If you chose <code>MONTHLY</code>, AWS set your start date to <code>01/01/18 00:00 UTC</code>. If you didn\'t specify an end date, AWS set your end date to <code>06/15/87 00:00 UTC</code>. The defaults are the same for the AWS Billing and Cost Management console and the API. </p> <p>You can change either date with the <code>UpdateBudget</code> operation.</p> <p>After the end date, AWS deletes the budget and all associated notifications and subscribers.</p>', ], ], 'TimeUnit' => [ 'base' => '<p> The time unit of the budget. e.g. MONTHLY, QUARTERLY, etc.</p>', 'refs' => [ 'Budget$TimeUnit' => '<p>The length of time until a budget resets the actual and forecasted spend.</p>', ], ], 'UnitValue' => [ 'base' => '<p> A string to represent budget spend unit. It should be not null and not empty.</p>', 'refs' => [ 'Spend$Unit' => '<p>The unit of measurement used for the budget forecast, actual spend, or budget threshold, such as dollars or GB.</p>', ], ], 'UpdateBudgetRequest' => [ 'base' => '<p> Request of UpdateBudget </p>', 'refs' => [], ], 'UpdateBudgetResponse' => [ 'base' => '<p> Response of UpdateBudget </p>', 'refs' => [], ], 'UpdateNotificationRequest' => [ 'base' => '<p> Request of UpdateNotification </p>', 'refs' => [], ], 'UpdateNotificationResponse' => [ 'base' => '<p> Response of UpdateNotification </p>', 'refs' => [], ], 'UpdateSubscriberRequest' => [ 'base' => '<p> Request of UpdateSubscriber </p>', 'refs' => [], ], 'UpdateSubscriberResponse' => [ 'base' => '<p> Response of UpdateSubscriber </p>', 'refs' => [], ], 'errorMessage' => [ 'base' => '<p>The error message the exception carries.</p>', 'refs' => [ 'CreationLimitExceededException$Message' => NULL, 'DuplicateRecordException$Message' => NULL, 'ExpiredNextTokenException$Message' => NULL, 'InternalErrorException$Message' => NULL, 'InvalidNextTokenException$Message' => NULL, 'InvalidParameterException$Message' => NULL, 'NotFoundException$Message' => NULL, ], ], ],];
