<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'You forgot to specify hours during the day' => 'You forgot to specify hours during the day',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'BinovoElkarBackup' => 
  array (
    'A month' => 'A month',
    'A year' => 'A year',
    'About' => 'About',
    'Actions' => 'Actions',
    'active' => 'active',
    'Active' => 'Active',
    'Add job' => 'Add job',
    'Add key' => 'Add key',
    'Add' => 'Add',
    'Admin' => 'Admin',
    'All messages' => 'All messages',
    'All' => 'All',
    'Authorized keys' => 'Authorized keys',
    'Authorized_keys file (%filename%) updated.' => 'Authorized_keys file (%filename%) updated.',
    'Back to client' => 'Back to client',
    'Back to job' => 'Back to job',
    'Backup script' => 'Backup script',
    'Backup server login' => 'Log in',
    'Backups dir' => 'Backups dir',
    'Backups' => 'Backups',
    'Browse' => 'Browse',
    'Can not have the retention count of the first backup level set to 1, and have a second backup level' => 'Can not have the retention count of the first backup level set to 1, and have a second backup level',
    'Change password' => 'Change password',
    'Change' => 'Change',
    'Client "%clientid%" %scripttype% script "%scriptname%" execution failed. Diagnostic information follows: %output%' => 'Client "%clientid%" %scripttype% script "%scriptname%" execution failed. Diagnostic information follows: %output%',
    'Client "%clientid%" %scripttype% script "%scriptname%" execution succeeded. Output follows: %output%' => 'Client "%clientid%" %scripttype% script "%scriptname%" execution succeeded. Output follows: %output%',
    'Client "%clientid%" %scripttype% script "%scriptname%" present but file "%scriptfile%" missing.' => 'Client "%clientid%" %scripttype% script "%scriptname%" present but file "%scriptfile%" missing.',
    'Client "%clientid%" at %loadLevel% of quota (%quota%MB).' => 'Client "%clientid%" at %loadLevel% of quota (%quota%MB).',
    'Client "%clientid%" post script error.' => 'Client "%clientid%" post script error.',
    'Client "%clientid%" post script ok.' => 'Client "%clientid%" post script ok.',
    'Client "%clientid%" pre script failed. Aborting backup.' => 'Client "%clientid%" pre script failed. Aborting backup.',
    'Client "%clientid%" pre script ok.' => 'Client "%clientid%" pre script ok.',
    'Client "%clientid%" quota exceeded (quota: %quota%MB, disk usage: %du%MB).' => 'Client "%clientid%" quota exceeded (quota: %quota%MB, disk usage: %du%MB).',
    'Client "%clientid%", Job "%jobid%" du begin.' => 'Client "%clientid%", Job "%jobid%" du begin.',
    'Client "%clientid%", Job "%jobid%" du end.' => 'Client "%clientid%", Job "%jobid%" du end.',
    'Client "%clientid%", Job "%jobid%" error.' => 'Client "%clientid%", Job "%jobid%" error.',
    'Client "%clientid%", Job "%jobid%" ok.' => 'Client "%clientid%", Job "%jobid%" ok.',
    'Client %name% as post script' => 'Client %name% as post script',
    'Client %name% as pre script' => 'Client %name% as pre script',
    'Client' => 'Client',
    'Clients' => 'Clients',
    'Command %command% failed. Diagnostic information follows: %output%' => 'Command %command% failed. Diagnostic information follows: %output%',
    'Command %command% succeeded with output: %output%' => 'Command %command% succeeded with output: %output%',
    'Command was unable to send the notification message: %exception%' => 'Command was unable to send the notification message: %exception%',
    'Comment' => 'Comment',
    'Comment / Key' => 'Comment / Key',
    'Config' => 'Config',
    'Confirm new password' => 'Confirm new password',
    'Currently not used' => 'Currently not used',
    'Daily backups activated, daily count can not be 0' => 'Daily backups activated, daily count can not be 0',
    'Daily' => 'Daily',
    'Day of month:' => 'Day of month:',
    'Day of week:' => 'Day of week:',
    'Day of year:' => 'Day of year:',
    'Days of the week' => 'Days of the week',
    'Delete client %clientid%, job %jobid%' => 'Delete client %clientid%, job %jobid%',
    'Delete script %scriptname%' => 'Delete script %scriptname%',
    'Delete' => 'Delete',
    'Description' => 'Description',
    'Directory' => 'Directory',
    'Disk usage' => 'Disk usage',
    'Documentation will be available soon' => 'Documentation will be available soon',
    'Download as .tgz' => 'Download as .tgz',
    'Download as .zip' => 'Download as .zip',
    'Download' => 'Download',
    'During the day' => 'During the day',
    'Edit client' => 'Edit client',
    'Edit Job' => 'Edit Job',
    'Edit policy' => 'Edit policy',
    'Edit script' => 'Edit script',
    'Edit User' => 'Edit user',
    'Edit' => 'Edit',
    'Email' => 'Email',
    'Error closing config file %filename%.' => 'Error closing config file %filename%.',
    'Error log for backup from job %joburl%' => 'Error log for backup from job %joburl%',
    'Error opening config file %filename%. Aborting backup.' => 'Error opening config file %filename%. Aborting backup.',
    'Error saving parameter "%param%"' => 'Error saving parameter "%param%"',
    'Error unlinking config file %filename%.' => 'Error unlinking config file %filename%.',
    'Error updating authorized_keys file (%filename%)' => 'Error updating authorized_keys file (%filename%)',
    'Error writing to config file %filename%. Aborting backup.' => 'Error writing to config file %filename%. Aborting backup.',
    'Errors and up' => 'Errors and up',
    'Exclude' => 'Exclude',
    'File' => 'File',
    'Five years' => 'Five years',
    'Four years' => 'Four years',
    'Friday' => 'Friday',
    'Help' => 'Help',
    'Home' => 'Home',
    'Host' => 'Host',
    'Hourly backups activated, hourly count can not be 0' => 'Hourly backups activated, hourly count can not be 0',
    'Hourly' => 'Hourly',
    'Hours' => 'Hours',
    'Id' => 'Id',
    'Inactive' => 'Inactive',
    'Include' => 'Include',
    'Invalid time specified.' => 'Invalid time specified.',
    'Is active' => 'Is active',
    'Job %jobid% has no policy' => 'Job %jobid% has no policy',
    'Job %name% as post script' => 'Job %name% as post script',
    'Job %name% as pre script' => 'Job %name% as pre script',
    'Job execution requested successfully' => 'Job execution requested successfully',
    'Jobs prioritized' => 'Jobs prioritized',
    'Jobs reordered' => 'Jobs reordered',
    'Jobs' => 'Jobs',
    'Key file updated. The update should be effective in less than 2 minutes.' => 'Key file updated. The update should be effective in less than 2 minutes.',
    'Key' => 'Key',
    'Language' => 'Language',
    'language_en' => 'English',
    'language_es' => 'Español',
    'language_eu' => 'Euskara',
    'Last log entry' => 'Last log entry',
    'Level' => 'Level',
    'Link' => 'Link',
    'Login' => 'Login',
    'Logout' => 'Logout',
    'Logs' => 'Logs',
    'Mailer host' => 'Mailer host',
    'Mailer password' => 'Mailer password',
    'Mailer transport' => 'Mailer transport',
    'Mailer user' => 'Mailer user',
    'Make backups during the day' => 'Make backups during the day',
    'Make daily backups' => 'Make daily backups',
    'Make weekly backups' => 'Make weekly backups',
    'Make monthly backups' => 'Make monthly backups',
    'Make yearly backups' => 'Make yearly backups',
    'Manage backups location' => 'Manage backups location',
    'Manage parameters' => 'Manage parameters',
    'Message' => 'Message',
    'Missing job.' => 'Missing job.',
    'Modification date' => 'Modification date',
    'Monday' => 'Monday',
    'Monthly backups activated, monthly count can not be 0' => 'Monthly backups activated, monthly count can not be 0',
    'Monthly' => 'Monthly',
    'MySQL DB name' => 'MySQL DB name',
    'MySQL host' => 'MySQL host',
    'MySQL password' => 'MySQL password',
    'MySQL port' => 'MySQL port',
    'MySQL user' => 'MySQL user',
    'Name' => 'Name',
    'Never' => 'Never',
    'New password' => 'New password',
    'New' => 'New',
    'No keys defined' => 'No keys defined',
    'No script' => 'No script',
    'No such job.' => 'No such job.',
    'None' => 'None',
    'Nothing to run.' => 'Nothing to run.',
    'Notices and up' => 'Notices and up',
    'Notify only' => 'Notify only',
    'Object' => 'Object',
    'Old password' => 'Old password',
    'One day' => 'One day',
    'One week' => 'One week',
    'Owner' => 'Owner',
    'Parameters updated' => 'Parameters updated',
    'Password changed' => 'Password changed',
    'Password' => 'Password',
    'Password:' => 'Password:',
    'Passwords do not match' => 'Passwords do not match',
    'Path not found:' => 'Path not found: ',
    'Path' => 'Path',
    'Policies' => 'Policies',
    'Policy %policyid% has no active retains' => 'Policy %policyid% has no active retains',
    'Policy' => 'Policy',
    'Post script' => 'Post script',
    'Pre script' => 'Pre script',
    'Public key generation requested' => 'Public key generation requested',
    'Public key' => 'Public key',
    'Quota warning level' => 'Quota warning level',
    'Quota' => 'Quota (GB)',
    'Really delete client %name%? This will remove all related jobs and backups' => 'Really delete client %name%? This will remove all related jobs and backups.',
    'Really delete job %name%? This will remove all related backups' => 'Really delete job %name%? This will remove all related backups.',
    'Really delete policy %name%?' => 'Really delete policy %name%?',
    'Really delete script %name%?' => 'Really delete script %name%?',
    'Records per page' => 'Records per page',
    'Removing the policy %name% failed. Check that it is not in use.' => 'Removing the policy %name% failed. Check that it is not in use.',
    'Removing the script %name% failed. Check that it is not in use.' => 'Removing the script %name% failed. Check that it is not in use.',
    'Repository backup script' => 'Repository backup script',
    'Restore' => 'Restore',
    'Retention policy' => 'Retention policy',
    'Run now' => 'Run now',
    'Running %command%' => 'Running %command%',
    'Saturday' => 'Saturday',
    'Save client %clientid%' => 'Save client %clientid%',
    'Save' => 'Save',
    'Saved' => 'Saved',
    'Script "%id%" not found' => 'Script "%id%" not found',
    'Scripts' => 'Scripts',
    'Send notices to' => 'Send notices to',
    'Set Parameter %paramname%' => 'Set Parameter %paramname%',
    'Show home page' => 'Show home page',
    'Show Logs' => 'Show Logs',
    'Show' => 'Show',
    'Six months' => 'Six months',
    'Sort jobs' => 'Sort jobs',
    'Source' => 'Source',
    'Status' => 'Status',
    'Sunday' => 'Sunday',
    'Sync first' => 'Sync first',
    'Number of copies to keep' => 'Number of copies to keep',
    'The number of copies to make during the day' => 'The number of copies to make during the day',
    'There are no jobs' => 'There are no jobs',
    'Three weeks' => 'Three weeks',
    'Three years' => 'Three years',
    'Thursday' => 'Thursday',
    'Time' => 'Time',
    'Time of day' => 'Time of day',
    'TODO' => 'TODO',
    'Tuesday' => 'Tuesday',
    'Two weeks' => 'Two weeks',
    'Two years' => 'Two years',
    'Unable to delete client: %extrainfo%' => 'Unable to delete client: %extrainfo%',
    'Unable to delete job: %extrainfo%' => 'Unable to delete job: %extrainfo%',
    'Unable to find Client entity' => 'Unable to find Client entity:',
    'Unable to find Job entity:' => 'Unable to find Job entity: ',
    'Unable to find public key:' => 'Unable to find public key:',
    'Unable to save your changes: %extrainfo%' => 'Unable to save your changes: %extrainfo%',
    'Updating key file %keys%' => 'Updating key file %keys%',
    'Upload dir' => 'Upload dir',
    'Upload post script' => 'Upload post script',
    'Upload pre script' => 'Upload pre script',
    'Uploading a script is mandatory for script creation.' => 'Uploading a script is mandatory for script creation.',
    'Url' => 'Url',
    'Url prefix' => 'Url prefix',
    'Use local permissions' => 'Use local permissions',
    'Used by' => 'Used by',
    'User %username% logged in.' => 'User %username% logged in.',
    'User' => 'User',
    'Username' => 'Username',
    'Username:' => 'Username:',
    'Users' => 'Users',
    'Wait for key generation. It should be available in less than 2 minutes. Check logs if otherwise' => 'Wait for key generation. It should be available in less than 2 minutes. Check logs if otherwise',
    'Warning: the directory does not exist' => 'Warning: the directory does not exist',
    'Warnings and up' => 'Warnings and up',
    'Wednesday' => 'Wednesday',
    'Weekly backups activated, weekly count can not be 0' => 'Weekly backups activated, weekly count can not be 0',
    'Weekly' => 'Weekly',
    'Welcome to the backup server configuration application.' => 'Welcome to the backup server configuration application.',
    'Wrong old password' => 'Wrong old password',
    'Yearly backups activated, yearly count can not be 0' => 'Yearly backups activated, yearly count can not be 0',
    'Yearly' => 'Yearly',
    'Yes' => 'Yes',
    'You forgot to specify hours during the day' => 'You forgot to specify hours during the day',
    'Add client' => 'Add client',
    'Backup not found' => 'Backup not found',
    'Client has not yet been saved' => 'Client has not yet been saved',
    'Job has not yet been saved' => 'Job has not yet been saved',
    'Impossible to delete superuser account' => 'Impossible to delete superuser account',
    'This script is used by some client or job' => 'This script is used by some client or job',
    'Run as' => 'Run as',
    'Job' => 'Job',
    'Before' => 'Before',
    'After' => 'After',
    'Size' => 'Size',
    'Back to root' => 'Back to root',
    'Preferences' => 'Preferences',
    'Manage preferences' => 'Manage preferences',
    'Abort' => 'Abort',
    'More' => 'More',
    'Clone' => 'Clone',
    'Abort job' => 'Abort job',
    'Test connection' => 'Test',
    'policy_help' => '<h4>Name</h4>
This is the identifier for the policy. It will show up in lists and combo boxes. The name must be unique among all policies, the application will complain if you try to use a name which is already in use.
<h4>Description</h4>
Free text to describe the policy. Put here whatever you might find useful.
<h4>Exclude and include</h4>
The application interprets each line of the exclude field as an exclude pattern and each line of the include field as an include pattern. By using these fields intelligently you can easily pick and choose which files to include in the snapshot and which files to ignore. The two field interact in the following way for each file and directory in the snapshot:
<ol>
 <li>If the file or directory matches a line in the include field, then the application includes this file. </li>
 <li>If the file or directory matches a line in the exclude field, then the application ignores this file and it will NOT be backup up. </li>
 <li>If the file or directory matches nothing the file is included in the backup.</li>
</ol>
As you can see the application backs up all files by default, excluding only those which match an exclude pattern and do NOT match any include pattern.
Notice that each job has each own include and exclude definitions. The ones defined in the job take precedence over the ones defined in the policy.
<h4>Sync first</h4>
When sync_first is enabled, all sync behaviour happens during an additional sync step. Even hourly calls only rotate the directories, without even connecting to the client. This ensures that the snapshots are consistent with the cost of an additional snapshot used only for syncing.
<h4>Hourly</h4>
Snapshots made during the day.
<h4>Daily</h4>
Snapshots once a every selected day at the given time.
<h4>Weekly</h4>
Snapshots once a week.
<h4>Monthly</h4>
Snapshots once a month.
<h4>Monthly</h4>
Snapshots once a year.
',
    'client_help' => '<h4>Name</h4>
This is the identifier for the client. It will show up in lists and combo boxes. The name must be unique among all clients, the application will complain if you try to use a name which is already in use.
<h4>Url</h4>
This is connection string for the client. The application will use this value together with the job\'s path as the full url for the job. Typical values for this field are:
<ul>
  <li>It can be empty. This is useful when the data we want to backup is mapped in the local file system.</li>
  <li><i>user@domain.name</i> will connect via ssh to the <i>domain.name</i> machine using <i>user</i> as user for the connection.</li>
  <li><i>user@domain.name:</i> Notice the colon. Same as above but instead of using ssh connections it will connect to the remote rsync server.</li>
</ul>
<h4>Quota</h4>
The amount of disk space in GB this client is allowed to use. -1 means "no limit". When the configured threshold is reached (80% by default) the application broadcasts a warning to the notification recipients specified in each job. The application discards backup jobs with an error if the disk usage is higher than the quota.
<h4>Disk usage</h4>
The currently used disk space by this client.
<h4>Description</h4>
Free text to describe the client. Put here whatever you might find useful.
<h4>Is active</h4>
If this check box is not marked, then no snapshots will be taken.
<h4>Pre and post scripts</h4>
Scripts to run before and after any job belonging to this clients. Think of opening VPN connections, setting up shared folders, etc. If multiple pre or post scripts are selected the order of execution is unspecified.
<h4>Owner</h4>
This user will be able to manage the client and its jobs. Only admin users can change the owner.
<h4>Advanced</h4>
<ul>
<li><b>SSH args</b>: custom SSH args. Example: -p2222 (will connect to SSH port TCP/2222)</li>
<li><b>Rsync short args</b>: Custom Rsync short args. Already included: -a</li>
<li><b>Rsync long args</b>: Custom Rsync long args. Example: --bwlimit=500 (will limit used bandwidth to 200kb/s). Already included: --delete --numeric-ids --relative --delete-excluded --stats</li>
</ul>
',
    'client_job_help' => '<h4>Jobs</h4>
You can edit the most important parameters of a job belonging to this client right here. Don\'t forget to save your changes after doing the modifications.
',
    'job_help' => '<h4>Name</h4>
This is the identifier for the job. It will show up in lists and combo boxes. The name must be unique among all jobs, the application will complain if you try to use a name which is already in use.
<h4>Path</h4>
The path or the name of the rsync resource in the client.
<h4>Disk usage</h4>
The currently used disk space by this job.
<h4>Description</h4>
Free text to describe the job. Put here whatever you might find useful.
<h4>Is active</h4>
If this check box is not marked, then no snapshots will be taken.
<h4>Send notices to</h4>
You can ask the application to notify one or several of the following people (by email) of any events. The application decides which events to notify based on the notify only settings. If you choose to notify an arbitrary email you will have to fill in that email address.
<h4>Notify only</h4>
In order to keep the message flow to a minimum you can have the application notify you only of events over a given priority threshold.
<h4>Pre and post scripts</h4>
Scripts to run before and after any job belonging to this jobs. Think of opening VPN connections, setting up shared folders, etc. If multiple pre or post scripts are selected the order of execution is unspecified.
<h4>Policy</h4>
Select the policy for this job. The policy defines when to take snapshots and how many to store, among other things. If you leave this field empty the application will take no snapshot whatsoever for this job.
<h4>Use local permissions</h4>
Rsnapshot makes an effort to keep permissions exactly as in the source files. This might cause some problems in Windows, so if you happen to have permission issues with windows jobs try setting this on. It might also make the backup up files unreadable for the web server.
<h4>Exclude and include</h4>
The application interprets each line of the exclude field as an exclude pattern and each line of the include field as an include pattern. By using these fields intelligently you can easily pick and choose which files to include in the snapshot and which files to ignore. The two field interact in the following way for each file and directory in the snapshot:
<ol>
 <li>If the file or directory matches a line in the include field, then the application includes this file. </li>
 <li>If the file or directory matches a line in the exclude field, then the application ignores this file and it will NOT be backup up. </li>
 <li>If the file or directory matches nothing the file is included in the backup.</li>
</ol>
As you can see the application backs up all files by default, excluding only those which match an exclude pattern and do NOT match any include pattern.
If and only if the include field is empty the application uses the include directives defined in the selected policy. The same can be said for the exclude field.
<h4>Advanced</h4>
<ul>
 <li><b>Token</b>: Job\'s Token will be used to allow anonymous remote job executions. Delete the token if you want to disable this feature.</li>
</ul>
',
    'user_help' => '<h4>Name</h4>
This is the identifier for the user. It will show up in lists and combo boxes. The name must be unique among all users, the application will complain if you try to use a name which is already in use.
<h4>Email</h4>
The email is very important. All the notifications for the user will be sent to the email specified here.
<h4>Is active</h4>
If this check box is not marked the user will not be able to log in.
<h4>Role</h4>
<ul>
 <li><b>Admin</b>: admin users will be able to change anything</li>
 <li><b>User</b>: limited users can only manage their own clients and jobs. Caution: they are able to see other users activity logs</li>
</ul>
<h4>Password</h4>
You can\'t read the password in this field, you can only use it to change it. If you put anything but the empty string in this field and save the password will be updated.
',
    'params_help' => '<h4>MySQL configuration</h4>
This parameters configure the connection to the DB. Be careful, if mess up with them the application will stop working.
<h4>Mailer configuration</h4>
This parameters configure the how the application sends emails. Be careful, if mess up with them the application will not be able to send notifications. <a href="http://symfony.com/doc/current/cookbook/email/email.html">The documentation from the Symfony project</a> might be helpful.
<h4>Upload dir</h4>
The application stores all the pre and post scripts in this directory. It has to be writable for the user running the web server.
<h4>Remove logs older than</h4>
The application will periodically prune the log registry so that it doesn\'t get too big. Any record older than the value specified here will be removed.
<h4>Quota warning level</h4>
When the disk space used by a client exceeds this percentage with respect to the quota send a warning message.
<h4>Records per page</h4>
Number of lines to show in pagination.
<h4>Url prefix</h4>
Depending on the Apache configuration the URL generated by the backups jobs that show up in the logs might be wrong. For example, if http://your.host/client/1 is generated where you would expect http://your.host/elkarbackup/client/1 set this parameter to /elkarbackup.
',
    'backupscriptconfig_help' => '<h4>Authorized keys</h4>
Adding your ssh public key to the applications authorized keys is required to make backups of the repository.
',
    'managebackups_help' => '<h4>Host</h4>
The host name or IP address of the NFS server. Leave empty for local file systems.
<p>This application depends on autofs to mount the remote file systems. If autofs is not configured as expected this field will not be editable.</p>
<h4>Directory</h4>
The full path in the local file system or the name of the NFS export. In any case it must start with \'/\'.
<h4>Tahoe storage</h4>
Check the box to enable a secondary Tahoe storage. If so, remember to set the tahoe configuration.
<p>This application depends on tahoe-lafs package. If Tahoe is not installed this box will be disabled.</p>
',
    'script_help' => '<h4>About the scripts</h4>
The application invoques the script using the user for backups. The application sets the following enviroment variables before running any of the scripts:
<ul>
 <li>ELKARBACKUP_LEVEL:  possible values are JOB or CLIENT</li>
 <li>ELKARBACKUP_EVENT:  possible values are PRE or POST</li>
 <li>ELKARBACKUP_URL:    the value is the full URL of the job or client</li>
 <li>ELKARBACKUP_ID:     the numeric job id or client id </li>
 <li>ELKARBACKUP_PATH:   the full path of the snapshot root </li>
 <li>ELKARBACKUP_STATUS: The output status of rsnapshot for post job scripts, always 0 otherwise</li>
 <li>ELKARBACKUP_CLIENT_NAME:  client name </li>
 <li>ELKARBACKUP_JOB_NAME: job name (empty in client) </li>
 <li>ELKARBACKUP_OWNER_EMAIL: job owner\'s email address (empty in client) </li>
 <li>ELKARBACKUP_RECIPIENT_LIST: job recipients email addresses (empty in client) </li>
 <li>ELKARBACKUP_CLIENT_TOTAL_SIZE: current client disk usage (in KB) </li>
 <li>ELKARBACKUP_JOB_TOTAL_SIZE: current job disk usage (in KB) </li>
 <li>ELKARBACKUP_JOB_RUN_SIZE: data size backed up this run (in KB) </li>
 <li>ELKARBACKUP_CLIENT_STARTTIME: client backup start timestamp (only available in post-client)</li>
 <li>ELKARBACKUP_CLIENT_ENDTIME: client backup end timestamp (only available in post-client)</li>
 <li>ELKARBACKUP_JOB_STARTTIME: job backup start timestamp (only available in post-job)</li>
 <li>ELKARBACKUP_JOB_ENDTIME: job backup end timestamp (only available in post-job)</li>
 <li>ELKARBACKUP_SSH_ARGS: advanced arguments for ssh conection</li>
</ul>
If any pre client script returns an exit status other than 0 the application aborts the process and prevents jobs of the client from running. On the other hand, the application will trigger a warning alert if the exit status of the pre job script is other than 0 (backup execution will not be aborted).
<h4>Name</h4>
This is the identifier for the script. It will show up in lists and combo boxes. The name must be unique among all scripts, the application will complain if you try to use a name which is already in use.
<h4>Description</h4>
Free text to describe the script. Put here whatever you might find useful.
<h4>File</h4>
Browse and select the script to upload.
<h4>Runs as before client script</h4>
Check this field if the script is designed to run when opening the client.
<h4>Runs as after client script</h4>
Check this field if the script is designed to run when closing the client.
<h4>Runs as before job script</h4>
Check this field if the script is designed to run when opening the job.
<h4>Runs as after job script</h4>
Check this field if the script is designed to run when closing the job.
',
    'sort_jobs_help' => '<h4>Sorting jobs</h4>
You can change job execution order. It\'s really usefull if you have multiple jobs scheduled at the same time.
<p>You can order as you desire just drag&drop-ing</p>
',
    'preferences_help' => '<h4>User preferences management</h4>
Anything you change here will not affect the other users.
<h4>Language</h4>
Select your prefered language
<h4>Records per page</h4>
Choose the number of lines you want to show per page
',
  ),
  'BinovoElkarTahoe' => 
  array (
    'Node nickname' => 'Node nickname',
    'Introducer node furl' => 'Introducer node furl',
    'ERROR: Invalid introducer`s furl, try again' => 'ERROR: Invalid introducer`s furl, try again',
    'Warning: wrong KHN parameters' => 'Warning: wrong KHN parameters',
    'Tahoe storage is successfully configured' => 'Tahoe storage is successfully configured',
    'ERROR: Tahoe storage is actually not configured properly or configured at all' => 'ERROR: Tahoe storage is actually not configured properly or configured at all',
    'Configure Tahoe storage' => 'Configure Tahoe storage',
    'Save' => 'Save',
    'You are now using a new writecap.' => 'You are now using a new writecap.',
    'Back it up!' => 'Back it up!',
    'This message will only be shown once' => 'This message will only be shown once',
    'Browse Tahoe repository' => 'Browse Tahoe repository',
    'Check Tahoe grid status' => 'Check Tahoe grid status',
    'Enable storage' => 'Enable storage',
    'Tahoe storage has never been configured' => 'Tahoe storage has never been configured',
    'Tahoe storage is configured' => 'Tahoe storage is configured',
    'ERROR: Tahoe storage configuration has failed' => 'ERROR: Tahoe storage configuration has failed',
    'Tahoe storage is NOT configured properly' => 'Tahoe storage is NOT configured properly',
    'SUCCESS: Tahoe storage has successfully been configured' => 'SUCCESS: Tahoe storage has successfully been configured',
    'Manage Tahoe storage' => 'Configure Tahoe storage',
    'Turn on Tahoe storage' => 'Turn on Tahoe storage',
    'Warning: tahoe is not properly configured and will not work' => 'Warning: tahoe is not properly configured and will not work',
    'configuring_help1' => '<h4>Tahoe storage is being configured...</h4>
<br>
<p>Please wait, the process will take around
',
    'configuring_help2' => 'seconds.</p>
<p>Once it is ready you will be automatically redirected back to the configuration page.</p>
<br>
<small>Leaving this page will NOT cancel the configuration process</small>
',
    'configurenode_help' => '<h4>Node nickname</h4>
Optional. If left empty \'elkarbackup_node\' will be set. Do not add blank spaces.
<h4>Introducer furl</h4>
The url needed to get connected to the tahoe network.
<h4>K-H-N parameters</h4>
<p>Optional. If left empty K=3, H=7 and N=10 will be set. Rule: 1 <= K <= H <= N</p>
<p>K = shares needed</p>
<p>H = shares happy</p>
<p>N = shares total</p>
<p>Data is erasure-coded into N shares distributed across at least H distinct storage servers so that it can be recovered from any K of these servers.</p>
<p>Requiered space to store data in the grid given data size = S and supossing the backup successfully writes in N \'servers\':</p>
<p>requiered space = S*N/K</p>
<h4>Enable storage</h4>
<p>When enabled data will be stored in the Elkarbackup server.</p>
<p>Allows the node to store some of the shares uploaded to the grid. You can symlink it to whatever you want: you can keep the rest of the node\'s files in one place, and store all the shares somewhere else.
The server keeps all of its shares at: </p><p>
',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
  ),
));


return $catalogue;
