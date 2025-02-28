
        document.addEventListener("DOMContentLoaded", function() {
            // Check if the user is already registered
            if (localStorage.getItem('userRegistered') === 'true') {
                alert("You are already registered!");
                window.location.href = 'home.html'; // Redirect to home or dashboard
            } else {
                alert("Registration is currently not available.");
                window.location.href = 'home.html'; // Redirect if you want to block all access
            }
        });
   