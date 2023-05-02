@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #f1f1f1;
    }

    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #d8e6ff;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #04AA6D;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbba;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #04AA6D;
    }

    .ri{
       
        width: auto;
        color: orange;
    }
</style>

<body>

    <div>
        <form id="regForm" action="#">
            <h2>Create a lesson for lesson_title </h2>
            <!-- One "tab" for each step in the form: -->

            <div class="tab">Rationale
                <div class="row mb-2">

                    @include('components.file-upload')

                    <textarea placeholder="rationale here..."></textarea>

                </div>
            </div>

            <div class="tab">Introduction
                <div class="row mb-2">


                    @include('components.file-upload')

                    <textarea placeholder="introduction here..."></textarea>

                </div>
            </div>

            <div class="tab"><i class="ri ri-lightbulb-flash-fill text-yellow"></i>Tip
                <div class="row mb-2">


                    @include('components.file-upload')

                    <textarea placeholder="tip here..."></textarea>

                </div>
            </div>

            <div class="tab">Lesson Development. This section makes provision for 
                            upto 3 lesson sections involving media files and text grouped together 
                <div class="row mb-2">


                    @include('components.file-upload')


                    <textarea placeholder="lesson development here..."></textarea>

                </div>

                <div class="row mb-2">


                    @include('components.file-upload')


                    <textarea placeholder="lesson development here..."></textarea>

                </div>

                <div class="row mb-2">


                    @include('components.file-upload')


                    <textarea placeholder="lesson development here..."></textarea>

                </div>
            </div>

            <div class="tab">Practical Activities
                <div class="row mb-2">


                    @include('components.file-upload')

                    <textarea placeholder="practical activities here..."></textarea>

                </div>
            </div>

            <div class="tab">Exercise
                <div class="row mb-2">


                    @include('components.lessons.exercise')

                    

                </div>
            </div>

            <div class="tab">Summary
                
                <div class="row mb-2">     
                
                    @include('components.file-upload')
                    <textarea placeholder="Summary here..."></textarea>

                </div>
            </div>

            <div class="tab">References
                
            <div class="row mb-2">     
               
                <textarea placeholder="References here..."></textarea>

            </div>
            </div>

            <div class="tab">Confirm Details
                <div class="mb-3">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="mdi mdi-bookmark-check display-4"></i>
                        </div>
                        <div>
                            <h5>Confirm Detail</h5>
                            <p class="text-muted">Confirm lesson details here</p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="tab">Success
                <div class="mb-3">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                        </div>
                        <div>
                            <h5>Successfully created a lesson!</h5>
                            <p class="text-muted">Confirm lesson details here</p>
                        </div>
                    </div>
                </div>
            </div>

            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    <a href="{{ url('/view-lesson') }}" class="btn btn-primary medium" type="button" id="nextBtn2">View Lessons</a>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center; margin-top:40px;">
                
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>

        </form>
    </div>


    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
                document.getElementById("nextBtn2").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 2)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else if(n == (x.length - 1 )){
   
                document.getElementById("nextBtn2").style.display = "inline";
                document.getElementById("nextBtn").style.display = "none";
            }
            
            else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

</body>

</html>
@endsection