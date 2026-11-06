# Chapter 4: Advanced PHP Forms, Validation & Application Workflow

This chapter covers the topics presented from **Slide 15 to the end of Chapter 4: Advanced PHP Forms, Validation & Application Workflow**.

## Chapter Outline

- Drop-down Menus
- Listboxes for Multiple Selections
- File Uploading in PHP
- PHP File Upload Configuration
- Temporary and Destination Directories
- Processing Uploaded File Information
- Moving and Renaming Uploaded Files
- Checking Whether a File Already Exists
- File Size Validation
- File Extension Validation
- Uploading Multiple Files
- Form Validation Checklist
- Student Registration Form Workflow

## 1. Drop-down Menus

A drop-down menu allows users to select one option from a list of available choices. It is useful for fields such as place of birth. After the form is submitted, PHP can retrieve and display the selected option.

## 2. Listboxes for Multiple Selections

A listbox allows users to select multiple options from a list. It is useful when a form requires more than one selection, such as choosing several places of residence. PHP can retrieve and process the selected values.

## 3. File Uploading in PHP

File uploading allows users to send files from their computers to a web server through an HTML form. This chapter introduces the form requirements for uploading files and explains how PHP receives and processes uploaded file information.

## 4. PHP File Upload Configuration

PHP uses the `php.ini` configuration file to control file-upload behavior. The settings discussed in this chapter include enabling uploads, choosing a temporary directory, limiting file sizes, controlling the number of files per request, and setting input and execution time limits. The server should be restarted after configuration changes.

## 5. Temporary and Destination Directories

Uploaded files are initially stored in a temporary directory on the server. A PHP script can then move them to a permanent destination. The destination folder must exist, and the server must have permission to save files there.

## 6. Processing Uploaded File Information

PHP provides information about uploaded files, including their names, sizes, temporary locations, and file types. This information helps an application identify uploaded files and determine how they should be handled.

## 7. Moving Uploaded Files

After a file has been received, PHP can move it from temporary storage to its intended destination. The application can then inform the user whether the upload was successful.

## 8. Renaming Uploaded Files

An application can save an uploaded file using a new name instead of its original filename. The chapter explains how a name supplied through a form can be used while retaining the file extension. This can help organize uploaded files more clearly.

## 9. Checking Whether a File Already Exists

Before saving a file, an application can check whether another file with the same destination name already exists. This helps identify filename conflicts and allows the application to display an appropriate message.

## 10. File Size Validation

File size validation checks whether an uploaded file meets the application's size requirements. The chapter discusses obtaining file-size information and understanding kilobyte and megabyte measurements. Files that do not meet the specified limit can be rejected.

## 11. File Extension Validation

File extension validation checks whether a file's extension belongs to an allowed list. This helps an application accept the file types specified for an upload and reject extensions that are not permitted.

## 12. Uploading Multiple Files

PHP forms can allow users to select and upload multiple files in one submission. The chapter explains how multiple uploaded files are organized and processed individually. Each file can be checked and moved to its destination.

## 13. Form Validation Checklist

The chapter presents a checklist of common form-validation tasks, including checking whether required fields and selection controls have values, processing checkbox and listbox selections, and validating uploaded files. It also covers checking file sizes and extensions, detecting existing files, renaming uploads, displaying uploaded images, uploading multiple files, and keeping form data after submission.

## 14. Student Registration Form Workflow

The final slides present a student-registration form as a practical example of combining different form controls into one application workflow. The example brings together common student information fields, selection controls, and document uploads in a single form.

## Folder Contents

- `Assigment4/` — PHP files containing the practical examples from this chapter.
- `Screenshots/` — screenshots of the practical examples.
- `README.md` — general explanation of the chapter topics and folder contents.

_Update the folder names above to match the actual names used in your repository._

## Reference

The topics in this README are based on the provided lecture slides, **Chapter 4: Advanced PHP Forms, Validation & Application Workflow**, from Slide 15 to the final slide.
