<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    /* Popup Styling */
    .popup-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .popup-content {
        background: white;
        width: 50%;
        padding: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        box-shadow: 0px 0px 10px gray;
        text-align: center;
        border-radius: 10px;
    }

    .popup-header {
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }

    .popup-body h2 {
        font-size: 18px;
        margin-top: 10px;
    }

    .popup-body p {
        font-size: 16px;
        margin-top: 5px;
    }

    .close-btn,
    .submit-btn {
        padding: 5px 10px;
        cursor: pointer;
        border: none;
        border-radius: 4px;
        margin-top: 15px;
    }

    .close-btn {
        background: red;
        color: white;
    }

    .submit-btn {
        background: blue;
        color: white;
        margin-left: 10px;
    }

    table {
        width: 100%;
        margin-top: 15px;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    input {
        width: 90%;
        padding: 5px;
    }

    .btn {
        padding: 5px 10px;
        cursor: pointer;
        border: none;
        border-radius: 4px;
    }

    .btn-success {
        background: green;
        color: white;
    }

    .btn-danger {
        background: red;
        color: white;
    }
</style>


<div class="card-body">

    <!-- Popup -->
    <div class="popup-overlay" id="popup">
        <div class="popup-content">
            <div class="popup-header">Add Referral</div>
            <div class="popup-body">
                <h2>Refer a Business Partner:</h2>
                <p>Do you know someone who could benefit from our services? Whether it’s a friend, colleague, or business partner, you can earn exciting rewards by helping us connect with new clients. Our Refer a Friend or Business Partner Program rewards you for every successful referral, making it a win-win for everyone!</p>

                <!-- Dynamic Form Table -->
                <table id="referralTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="name-input" placeholder="Enter Name" required></td>
                            <td><input type="email" class="email-input" placeholder="Enter Email" required></td>
                            <td><button class="btn btn-success add-btn">Add</button></td>
                        </tr>
                    </tbody>
                </table>

                <button class="close-btn" id="closePopup">Close</button>
                <button class="submit-btn" id="submitReferral">Submit</button>
            </div>
        </div>
    </div>


</div>

<script>
    $(document).ready(function() {
        // Show popup
        $("#referBtn").click(function() {
            $("#popup").fadeIn();
        });

        // Close popup and reset form
        $("#closePopup").click(function() {
            resetForm();
            $("#popup").fadeOut();
        });

        // Close when clicking outside
        $(document).mouseup(function(e) {
            var popup = $(".popup-content");
            if (!popup.is(e.target) && popup.has(e.target).length === 0) {
                resetForm();
                $("#popup").fadeOut();
            }
        });

        // Add new row
        $(document).on("click", ".add-btn", function() {
            let newRow = `<tr>
                    <td><input type="text" class="name-input" placeholder="Enter Name" required></td>
                    <td><input type="email" class="email-input" placeholder="Enter Email" required></td>
                    <td><button class="btn btn-danger remove-btn">Remove</button></td>
                </tr>`;
            $("#referralTable tbody").append(newRow);
        });

        // Remove row (except the first)
        $(document).on("click", ".remove-btn", function() {
            $(this).closest("tr").remove();
        });

        // Email validation
        $(document).on("input", ".email-input", function() {
            let email = $(this).val();
            let regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!regex.test(email)) {
                $(this).css("border", "2px solid red");
            } else {
                $(this).css("border", "2px solid green");
            }
        });

        $("#submitReferral").click(function() {
            let formData = [];
            let valid = true;

            $("#referralTable tbody tr").each(function() {
                let name = $(this).find(".name-input").val().trim();
                let email = $(this).find(".email-input").val().trim();
                let regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

                if (name === "" || email === "" || !regex.test(email)) {
                    valid = false;
                    $(this).find(".email-input").css("border", "2px solid red");
                } else {
                    $(this).find(".email-input").css("border", "2px solid green");
                    formData.push({
                        name: name,
                        email: email
                    });
                }
            });

            if (!valid) {
                Swal.fire("Error", "Please enter valid names and emails before submitting.", "error");
            } else {
                $.ajax({
                    url: "<?php echo e(route('store-refered-values')); ?>", // Laravel route
                    type: "POST",
                    data: {
                        referrals: formData,
                        _token: $('meta[name="csrf-token"]').attr("content") // Ensure CSRF token is included
                    },
                    success: function(response) {

                        if (response == true) {
                            Swal.fire("Success", "Referrals submitted successfully!", "success").then(() => {
                                setTimeout(() => {
                                    window.location.reload();
                                }, 1000); // 1-second delay before page reload
                            });
                            resetForm();
                            $("#popup").fadeOut();
                        } else {
                            Swal.fire("Failed", "Something went wrong. Please try again.", "error").then(() => {
                                setTimeout(() => {
                                    window.location.reload();
                                }, 1000); // 1-second delay before page reload
                            });
                            resetForm();
                            $("#popup").fadeOut();
                        }

                    },
                    error: function() {
                        Swal.fire("Failed", "Something went wrong. Please try again.", "error").then(() => {
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000); // 1-second delay before page reload
                        });
                    }


                });

            }
        });

        // Function to reset the form
        function resetForm() {
            $("#referralTable tbody").html(`
            <tr>
                <td><input type="text" class="name-input" placeholder="Enter Name" required></td>
                <td><input type="email" class="email-input" placeholder="Enter Email" required></td>
                <td><button class="btn btn-success add-btn">Add</button></td>
            </tr>
        `);
        }




    });
</script><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/profilePages/referalPartner.blade.php ENDPATH**/ ?>