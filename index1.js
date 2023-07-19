
    function validateForm() {
      // Get form values
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var phone = document.getElementById("phone").value;
      var gender = document.getElementById("gender").value;
      var course = document.getElementById("course").value;
      var role = document.getElementById("role").value;
      var desc = document.getElementById("desc").value;
      var resume = document.getElementById("resume").value;

      // Perform validation here (add your own validation rules)

      // Example: Check if any field is empty
      if (name === '' || email === '' || phone === '' || gender === '' || course === '' || role === '' || desc === '' || resume === '') {
        alert("Please fill in all the fields.");
        return false;
      }

      // Example: Validate email format
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
      }

      // Add more validation rules as needed

      return true; // If all validations pass, the form will be submitted
    }
