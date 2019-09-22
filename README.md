## School Management and Accounting Software

## Testing
- We want testable softwares. Most parts of the software are covered by tests. You also can contribute by writing test case!
- To run Feature and Unit Tests use `./vendor/bin/phpunit` and to run Browser Tests set `APP_URL` environment variable in your `.env` file. This value should match the URL you use to access your application in a browser. Then run `php artisan dusk`.
## Features

This software has following features:

* Roles: Master, Admin, Teacher, Student, Librarian, Accountant

   **(You can Impersonate User Roles in Development environment)** See how [Impersonation]
* Attendance
* Mark
* Registration
* Notice, Syllabus
* Library
* Exam
* Grade
* Accounts
* Messaging (uses CKEditor 5)
* `Export/Import` Users (Students, Teachers) from/to **Excel**
