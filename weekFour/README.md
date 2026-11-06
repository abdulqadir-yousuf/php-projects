# Chapter 4: Advanced PHP Forms

This week contains practical examples based on **Chapter 4: Advanced PHP Forms, Validation & Application Workflow**, up to the slide titled **“Upload Files in PHP.”**

## Chapter Outline

- HTML forms and form controls
- `GET`, `POST`, and PHP superglobals
- Reading submitted form data
- Textbox and password fields
- Textarea
- Radio buttons
- Checkbox groups
- Drop-down menus
- Multiple-choice listboxes
- PHP checks with `empty()` and loops with `foreach`

## Form Data and PHP Superglobals

A form uses the `<form>` element, a submission method such as `POST`, input controls, and a destination for the submitted data. The chapter introduces these PHP superglobals:

- `$_GET` reads data submitted with the `GET` method.
- `$_POST` reads data submitted with the `POST` method.
- `$_REQUEST` can access data submitted through either `GET` or `POST`.
- `$_FILES` contains information about uploaded files; file-upload examples begin in the next section of the slides and are not included in `form.php`.

Superglobal indexes use the form control's `name` attribute, and names are case-sensitive.

## Form Controls Demonstrated

The `form.php` file brings the form examples before **“Upload Files in PHP”** together on one page:

- Textbox and password inputs
- A textarea for comments
- Radio buttons for one selection
- Checkboxes using `faculties[]` for multiple selections
- A drop-down menu for one place of birth
- A multiple-choice listbox using `residence[]`
- Reset and submit controls

After submission, PHP displays the entered values. `empty()` checks whether a value was supplied, and `foreach` processes selected values from checkbox and listbox arrays.

## Folder Contents

- `form.php` — combined form-control examples and PHP handling of submitted `POST` data.
- `function.php` — a simple user-defined function example using `testOne()`.
- `index.php` — demonstrates including another PHP file with `include` and `include_once`.
- `Screenshoot/` — screenshots of the form, function, and include examples.
- `Screenshoot/README.md` — explains each screenshot.

## Running the Examples

1. Put the `weekFour` folder inside your XAMPP `htdocs` directory.
2. Start Apache in the XAMPP Control Panel.
3. Open `http://localhost/weekFour/form.php` in your browser.
4. Fill out the form and select **Register** to see the submitted values.

The examples in `function.php` and `index.php` can be opened through `http://localhost/weekFour/function.php` and `http://localhost/weekFour/index.php`.

## Reference

The form topics follow the provided lecture slides, **Chapter 4: Advanced PHP Forms, Validation & Application Workflow**, up to the “Upload Files in PHP” section.
