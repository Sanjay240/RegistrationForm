# RegistrationForm
Working Link: https://lab2a-frontend.herokuapp.com/ 
Form Validation with AJAX and Twitter Bootstrap
Validation for the fields follows:
          Employee Name
                Error
                "Employee name cannot contain digits." - if employee name contains 0-9
                "Employee name must be between 5-20 characters in length.." - if employee name is less than 5 or greater than 20 in length
                  Valid
                  All other non-blank text
          Employee ID
                Error
                "Employee ID must only contain digits." - if employee id contains any character that is not 0-9
                "Employee ID must be 9 digits in length." - if employee id is not exactly 9 digits in length
                Valid
                All other non-blank text
          Department
                Error
                "Advertising is not a valid department." - if the department entered is the exact text "Advertising"
                Valid
                All other non-blank text
          Bonus
              Error
              "Bonus must only contain digits." - if bonus contains any character that is not 0-9
              "Please enter a numeric value." - if value is blank
              Valid
              All other non-blank text
