<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOCAL14AGENCY</title>
    <link rel="shortcut icon" href="/image/pngegg.png" type="image/x-icon">
    <style>
        *,
*::before,
*::after {
  box-sizing: border-box;
}

:root {
  --darkBlue: #010a43;
  --lightGreen: #a7e9af;
  --whiteClr: #fff;
  --lightBlue: rgba(0, 64, 128, 0.2);
  --intenseBlue: #46b3e6;
}

:focus {
  outline: 2px solid #f8dc88;
}

html {
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
}

body {
  min-height: 100vh;
  margin: 0;
  padding: 1rem;
  font-family: "Roboto", sans-serif;
  color: var(--darkBlue);
  background-color: #fdfdfd;
}

.container {
  min-height: 100vh;
  display: grid;
  grid-gap: 40px;
  align-content: center;
}

.main {
  display: block;
  align-self: start;
}

button,
input,
select,
textarea {
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15;
  margin: 0;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

button,
[type="button"],
[type="submit"] {
  -webkit-appearance: button;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="submit"]:-moz-focusring {
  outline: 1px dotted ButtonText;
}

[type="checkbox"],
[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

.github-corner {
  background-color: transparent;
  text-decoration: none;
}
.github-corner svg {
  position: absolute;
  right: 0;
  top: 0;
  border: 0;
  fill: rgba(92, 42, 157, 0.8);
  transition: fill 0.25s ease-in-out;
  z-index: 1;
}

.github-corner svg:hover {
  fill: #5c2a9d;
}

.header {
  align-self: center;
  text-align: center;
}

.header__title {
  margin: 0;
  font-size: 2em;
  line-height: 1.2;
}

.header__description {
  margin-bottom: 3rem;
  font-size: 1em;
  line-height: 1.4;
}

main.submission {
  align-self: center;
  justify-self: center;
}

h2.submission {
  text-align: center;
}

.illustration {
  width: 100%;
  border-style: none;
}

label {
  cursor: pointer;
}

@media (min-width: 700px) {
  .container {
    grid-template-columns: 1fr 1fr;
    max-width: 1400px;
    margin: 0 auto;
    align-items: center;
  }

  .header,
  .main {
    grid-row: 1;
  }
}

.progressbar {
  margin: 2rem 1rem 2rem;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  counter-reset: list;
  height: 20px;
}

.progressbar__step {
  position: relative;
  width: 20%;
  line-height: 1.4;
}

.progressbar__step.active:before {
  background-color: var(--lightGreen);
}

.progressbar__step:nth-child(2)::after,
.progressbar__step:nth-child(3)::after,
.progressbar__step:nth-child(4)::after,
.progressbar__step:nth-child(5)::after {
  content: "";
  position: absolute;
  left: -100%;
  top: 12px;
  z-index: -1;
  width: 100%;
  height: 2px;
  background-color: var(--lightBlue);
}

.progressbar__step.active:nth-child(2)::after,
.progressbar__step.active:nth-child(3)::after,
.progressbar__step.active:nth-child(4)::after,
.progressbar__step.active:nth-child(5)::after {
  background-color: var(--lightGreen);
}

.progressbar__step:before {
  counter-increment: list;
  content: counter(list);
  position: absolute;
  display: block;
  width: 25px;
  height: 25px;
  font-size: 0.85rem;
  background-color: var(--whiteClr);
  text-align: center;
  border: 3px solid var(--lightBlue);
  border-radius: 100%;
}

.survey {
  display: flex;
  flex-direction: column;
}

.survey__panel {
  display: none;
  padding: 1rem;
}

.survey__panel--current {
  display: block;
}

.survey__panel__question {
  margin: 0 0 1.5rem;
  font-size: 1.35em;
  line-height: 1.2;
}

.survey__panel strong {
  --darkGrey: #4b4b4b;
  display: block;
  margin-bottom: 0.3rem;
  font-weight: normal;
  font-size: 0.95rem;
  color: var(--darkGrey);
}

.error-message {
  --errClr: #b80d57;
  height: 14px;
  margin-bottom: 0;
  margin-top: 5px;
  font-size: 0.85rem;
  color: var(--errClr);
}

[role="alert"] {
  display: block;
}

.survey__panel__period {
  display: grid;
  grid-gap: 13px;
  grid-template-columns: repeat(2, 150px);
}

.survey__panel__period [type="radio"] {
  opacity: 0;
  display: block;
  width: 150px;
  height: 50px;
  position: absolute;
  z-index: 1;
  cursor: pointer;
}

.survey__panel__period label {
  display: inline-block;
  position: relative;
  width: 150px;
  padding: 15px 30px;
  border: 2px solid var(--lightBlue);
  text-align: center;
  border-radius: 3px;
}

.survey__panel__period label:hover,
.survey__panel__period [type="radio"]:checked + label {
  border-color: var(--intenseBlue);
}

.review__period [type="radio"]:checked + label {
  border: var(--intenseBlue);
}

.radiobox,
.radiobox:checked,
.radiobox:not(:checked),
.checkbox,
.checkbox:not(:checked) {
  opacity: 0;
}

.radiobox:checked + label,
.radiobox:not(:checked) + label,
.checkbox:checked + label,
.checkbox:not(:checked) + label {
  position: relative;
  padding-left: 30px;
}

.radiobox:checked + label:before,
.radiobox:not(:checked) + label:before,
.checkbox:checked + label:before,
.checkbox:not(:checked) + label:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 18px;
  height: 18px;
  border: 1px solid #ddd;
  border-radius: 100%;
  background-color: var(--whiteClr);
}

.radiobox:checked + label:after,
.radiobox:not(:checked) + label:after {
  content: "";
  width: 8px;
  height: 8px;
  background-color: var(--intenseBlue);
  position: absolute;
  left: 5px;
  top: 5px;
  border-radius: 100%;
  transition: transform 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86),
    opacity 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86);
}

.radiobox:not(:checked) + label:after,
.checkbox:not(:checked) + label:after {
  opacity: 0;
  transform: scale(0);
}

.radiobox:checked + label:after,
.checkbox:checked + label:after {
  opacity: 1;
  transform: scale(1);
}

.survey__panel__satisfaction label,
.survey__panel__recommendation label,
.survey__panel__personaldetails label,
.survey__panel__hearabout label {
  line-height: 2;
}

.form-group-textarea {
  margin-top: 1rem;
}

.form-group-textarea label {
  display: block;
  font-size: 0.95rem;
}

.form-group-textarea textarea {
  padding: 10px;
  overflow: auto;
  font-size: 0.9rem;
  display: block;
  border: 2px solid var(--lightBlue);
  font-family: inherit;
  width: 100%;
  resize: vertical;
  min-height: 100px;
  max-width: 300px;
  color: var(--darkBlue);
  -webkit-appearance: none;
}

.survey__panel .radiobox {
  margin-left: 10px;
}

.checkbox:checked + label:before,
.checkbox:not(:checked) + label:before {
  border-radius: 0;
}

.checkbox:checked + label:before {
  background-color: var(--intenseBlue);
}

.checkbox:checked + label:after,
.checkbox:not(:checked) + label:after {
  content: "";
  position: absolute;
  left: 4px;
  top: 7px;
  width: 2px;
  height: 2px;
  background-color: var(--whiteClr);
  box-shadow: 2px 0 0 var(--whiteClr), 4px 0 0 var(--whiteClr),
    4px -2px 0 var(--whiteClr), 4px -4px 0 var(--whiteClr),
    4px -6px 0 var(--whiteClr), 4px -8px 0 var(--whiteClr);
  transform: rotate(45deg);
  transition: transform 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86),
    opacity 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86),
    background-color 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86);
}

.survey__panel__personaldetails .form-group {
  margin: 1rem 0;
}

.survey__panel__personaldetails .name,
.survey__panel__personaldetails .email,
.survey__panel__personaldetails .age {
  display: block;
  font-size: 0.95rem;
}

.survey__panel__personaldetails [name="name"],
.survey__panel__personaldetails [name="email"],
.survey__panel__personaldetails [name="country"] {
  width: 100%;
  padding: 0.6rem 0.75rem;
  border: 2px solid var(--lightBlue);
  max-width: 300px;
  -webkit-appearance: none;
}

.survey__panel__personaldetails [name="age"] {
  padding: 0.6rem 0.75rem;
  border: 2px solid var(--lightBlue);
  -webkit-appearance: none;
}

.form-buttons {
  display: flex;
  max-width: 400px;
  margin-left: 10px;
  margin-top: auto;
}

.button {
  --btnClr: #5f6caf;
  display: inline-block;
  padding: 10px 25px;
  background-color: var(--btnClr);
  color: var(--whiteClr);
  border: 2px solid var(--btnClr);
  border-radius: 3px;
  font-size: 0.875rem;
  font-family: inherit;
  cursor: pointer;
}

button[disabled] {
  display: none;
}

.button {
  margin: 0 0.5rem;
}

.button:hover {
  --btnHoverClr: #444e83;
  background-color: var(--btnHoverClr);
  border-color: var(--btnHoverClr);
}

.visuallyhidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  white-space: nowrap;
  width: 1px;
}

    </style>
</head>
<body>
    <!-- <a href="https://github.com/alexandracaulea/freecodecamp-projects/tree/master/Responsive-Web-Design-Projects/Build%20a%20Survey%20Form" target="_blank" rel="noopener noreferrer" class="github-corner" aria-label="View source on GitHub">
        <svg width="86" height="82" viewBox="0 0 86 82" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <path d="M85.346.362h-85l85 81.175V.362z" />
          <path d="M67.282 37.7c-1.209 1.268-2.414 2.188-3.617 2.76-1.202.573-2.362.788-3.478.647-1.117-.141-2.106-.416-2.969-.824-.862-.408-1.783-.984-2.764-1.727.114 1.127-.385 2.275-1.498 3.442l-4.292 4.503-6.834-6.515 3.1-3.252c-.62-.4-1.151-.81-1.594-1.232-.442-.422-.78-.823-1.011-1.203a5.282 5.282 0 01-.526-1.122 3.431 3.431 0 01-.185-.988c-.004-.29.008-.55.037-.777.029-.227.075-.406.137-.537l.094-.197a8.07 8.07 0 00.481-1.834c.072-.568.074-.98.006-1.236l-.103-.385c-.075-.643-.056-1.024.055-1.14.111-.117.298-.083.559.102l.295.282c.361.408.611.9.75 1.478.137.577.16 1.045.069 1.403l-.04.535c-.61 2.411.352 4.06 2.885 4.947.861-.707 1.745-1.043 2.65-1.008-.79-.944-1.41-1.836-1.858-2.678-.449-.842-.762-1.809-.94-2.902-.178-1.093-.019-2.261.48-3.506.497-1.244 1.35-2.5 2.559-3.767 1.367-1.435 3.019-2.216 4.955-2.344.623-1.507 1.849-2.694 3.677-3.562.066.127.205.244.417.35.212.107.526.597.943 1.472.417.875.764 1.955 1.042 3.238a19.751 19.751 0 013.919 2.78 20.44 20.44 0 012.965 3.782c1.262.184 2.324.465 3.186.84.862.376 1.407.674 1.637.892l.296.378c-.746 1.9-1.873 3.18-3.382 3.844-.035 1.94-.736 3.627-2.103 5.061z" fill="#f6f6f6" />
        </svg>
      </a> -->
    
    
      <div class="container">
        <header class="header">
          <h1 id="title" class="header__title">Packages Survey Form</h1>
          <p id="description" class="header__description">
            We would love to hear your thoughts on how we can improve your experience.
          </p>
          <img src="https://res.cloudinary.com/alexandracaulea/image/upload/v1585333913/illustration_x46ict.svg" alt="" aria-hidden="true" class="illustration" />
        </header>
        <main class="main">
          <form action="#" method="GET" id="survey-form" class="survey" novalidate>
            <div class="progressbar" tabindex="0" role="progressbar" aria-valuemin="1" aria-valuemax="5" aria-valuenow="1" aria-valuetext="Question 1 of 5: How long have you been using our product?">
              <span class="progressbar__step active" aria-hidden="true"></span>
              <span class="progressbar__step" aria-hidden="true"></span>
              <span class="progressbar__step" aria-hidden="true"></span>
              <span class="progressbar__step" aria-hidden="true"></span>
              <span class="progressbar__step" aria-hidden="true"></span>
            </div>
      
            <section class="survey__panel survey__panel--current" aria-hidden="false" data-index="1" data-panel="firstPanel" data-requirement="option">
              <h2 class="survey__panel__question">
                <span class="visuallyhidden">Question 1 of 5 </span>How long have you been using our website?
              </h2>
              <div class="survey__panel__period">
                <div class="form-group">
                  <input id="never" type="radio" name="question_1" value="never" />
                  <label for="never">never</label>
                </div>
                <div class="form-group">
                  <input id="lessthenoneyear" type="radio" name="question_1" value="lessthenoneyear" />
                  <label for="lessthenoneyear">0 - 1 year</label>
                </div>
                <div class="form-group">
                  <input id="onetotwoyears" type="radio" name="question_1" value="onetotwoyears" />
                  <label for="onetotwoyears">1 - 2 years</label>
                </div>
                <div class="form-group">
                  <input id="morethentwoyears" type="radio" name="question_1" value="morethentwoyears" />
                  <label for="morethentwoyears"><span class="visuallyhidden">more then</span><span aria-hidden="true">></span> 2 years</label>
                </div>
              </div>
              <p class="error-message"></p>
            </section>
      
            <section class="survey__panel" aria-hidden="true" data-index="2" data-panel="secondPanel" data-requirement="option">
              <h2 class="survey__panel__question">
                <span class="visuallyhidden">Question 2 of 5 </span>How do rate your overall satisfaction about the packages?
              </h2>
              <div class="survey__panel__satisfaction">
                <div class="form-group">
                  <input id="notsatified" type="radio" class="radiobox" name="question_2" value="Not Satisfied" />
                  <label for="notsatified">Not Satisfied</label>
                </div>
                <div class="form-group">
                  <input id="quitesatisfied" type="radio" class="radiobox" name="question_2" value="Quite Satisfied" />
                  <label for="quitesatisfied">Quite Satisfied</label>
                </div>
                <div class="form-group">
                  <input id="satisfied" type="radio" class="radiobox" name="question_2" value="Satisfied" />
                  <label for="satisfied">Satisfied</label>
                </div>
                <div class="form-group">
                  <input id="completelysatisfied" type="radio" class="radiobox" name="question_2" value="Completely Satisfied" />
                  <label for="completelysatisfied">Completely Satisfied</label>
                </div>
              </div>
              <p class="error-message"></p>
            </section>
      
            <section class="survey__panel" aria-hidden="true" data-index="3" data-panel="thirdPanel" data-requirement="checkbox">
              <h2 class="survey__panel__question">
                <span class="visuallyhidden">Question 3 of 5 </span>How did you hear about our website?
              </h2>
              <div class="survey__panel__hearabout">
                <div class="form-group">
                  <input type="checkbox" class="checkbox" id="searchengine" name="question_3" value="Search Engine" />
                  <label for="searchengine">Search Engine</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" class="checkbox" id="friend" name="question_3" value="A friend of mine" />
                  <label for="friend">A friend of mine</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" class="checkbox" id="socialmedia" name="question_3" value="Social Media" />
                  <label for="socialmedia">Social Media</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" class="checkbox" id="other" name="question_3" value="Other" />
                  <label for="other">Other</label>
                </div>
              </div>
              <p class="error-message"></p>
            </section>
      
            <section class="survey__panel" aria-hidden="true" data-index="4" data-panel="fourthPanel" data-requirement="option">
              <h2 class="survey__panel__question">
                <span class="visuallyhidden">Question 4 of 5 </span>Would you recommend our Packages to your friends?
              </h2>
              <div class="survey__panel__recommendation">
                <div class="form-group">
                  <input type="radio" class="radiobox" name="question_4" id="norecomment" value="no" />
                  <label for="norecomment">No</label>
                </div>
                <div class="form-group">
                  <input type="radio" class="radiobox" name="question_4" id="mayberecommend" value="maybe" />
                  <label for="mayberecommend">Maybe</label>
                </div>
                <div class="form-group">
                  <input type="radio" class="radiobox" name="question_4" id="yesrecommend" value="yes" />
                  <label for="yesrecommend">Yes</label>
                </div>
                <div class="form-group form-group-textarea">
                  <label for="recommendation">Additional message:</label>
                  <textarea name="recommendText" id="recommendation" spellcheck="false"></textarea>
                </div>
              </div>
              <p class="error-message"></p>
            </section>
      
            <section class="survey__panel" aria-hidden="true" data-index="5" data-panel="fifthPanel" data-requirement="name;email;country;age">
              <h2 class="survey__panel__question">
                <span class="visuallyhidden">Question 5 of 5 </span>Please fill your details
              </h2>
              <div class="survey__panel__personaldetails">
                <div class="form-group">
                  <label for="name" id="name-label" class="name">Name:</label>
                  <input type="text" id="name" name="name" required placeholder="Your Name" />
                  <p class="error-message"></p>
                </div>
                <div class="form-group">
                  <label for="email" id="email-label" class="email">Email:</label>
                  <input type="email" id="email" name="email" required placeholder="Your Email" />
                  <p class="error-message"></p>
                </div>
                <div class="form-group">
                  <select name="country" id="dropdown" name="country">
                    <option value>Your Country</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Åland Islands">Åland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernsey">Guernsey</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-bissau">Guinea-bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Helena">Saint Helena</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-leste">Timor-leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                  </select>
                  <p class="error-message"></p>
                </div>
                <div class="form-group">
                  <label for="number" id="number-label" class="age">Age</label>
                  <input type="number" id="number" name="age" min="0" max="150" required placeholder="Age" />
                  <p class="error-message"></p>
                </div>
              </div>
            </section>
            <div class="form-buttons">
              <button class="button" type="button" name="prev" disabled="disabled" aria-label="Previous" aria-hidden="true">
                Prev
              </button>
              <button class="button" type="button" name="next" aria-label="Next" aria-hidden="false">Next</button>

              <button class="button" type="submit" id="submit" name="submit" disabled="disabled" aria-hidden="true">
                Submit
              </button>
            </div>
          </form>
        </main>
      </div>
    
      <!-- <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script> -->
</body>
<script>
    function Survey(survey) {
  if (!survey) {
    throw new Error("No Survey Form found!");
  }

  // select the elements
  const progressbar = survey.querySelector(".progressbar");
  const surveyPanels = survey.querySelectorAll(".survey__panel");
  const question1Radios = survey.querySelectorAll("[name='question_1']");
  const question2Radios = survey.querySelectorAll("[name='question_2']");
  const question3CheckBoxes = survey.querySelectorAll("[name='question_3']");
  const question4Radios = survey.querySelectorAll("[name='question_4']");
  const question4Textarea = survey.querySelector("[name='recommendText']");
  const question5Name = survey.querySelector("[name='name']");
  const question5Email = survey.querySelector("[name='email']");
  const question5Country = survey.querySelector("[name='country']");
  const question5Age = document.querySelector("[name='age']");
  const allPanels = Array.from(survey.querySelectorAll(".survey__panel"));
  let progressbarStep = Array.from(
    progressbar.querySelectorAll(".progressbar__step ")
  );
  const mainElement = document.querySelector("main");
  const nextButton = survey.querySelector("[name='next']");
  const prevButton = survey.querySelector("[name='prev']");
  const submitButton = survey.querySelector("[name='submit']");
  let currentPanel = Array.from(surveyPanels).filter((panel) =>
    panel.classList.contains("survey__panel--current")
  )[0];
  const formData = {};
  const options = {
    question1Radios,
    question2Radios,
    question3CheckBoxes,
    question4Radios,
    question4Textarea,
    question5Name,
    question5Email,
    question5Country,
    question5Age
  };
  let dontSubmit = false;

  function storeInitialData() {
    allPanels.map((panel) => {
      let index = panel.dataset.index;
      let panelName = panel.dataset.panel;
      let question = panel
        .querySelector(".survey__panel__question")
        .textContent.trim();
      formData[index] = {
        panelName: panelName,
        question: question
      };
    });
  }

  function updateProgressbar() {
    let index = currentPanel.dataset.index;
    let currentQuestion = formData[`${parseFloat(index)}`].question;
    progressbar.setAttribute("aria-valuenow", index);
    progressbar.setAttribute("aria-valuetext", currentQuestion);
    progressbarStep[index - 1].classList.add("active");
  }

  function updateFormData({ target }) {
    const index = +currentPanel.dataset.index;
    const { name, type, value } = target;
    if (type === "checkbox") {
      if (formData[index].answer === undefined) {
        formData[index].answer = {
          [name]: [value]
        };
        return;
      }
      if (formData[index]["answer"][`${name}`].includes(value)) {
        const position = formData[index]["answer"][`${name}`].findIndex(
          (elem) => elem === value
        );
        formData[index]["answer"][`${name}`].splice(position, 1);
      } else {
        formData[index]["answer"][`${name}`].push(value);
      }
      return;
    }
    if (index === 4 || index === 5) {
      let copy;
      const original = formData[index].answer;
      if (original === undefined) {
        formData[index].answer = {
          [name]: value
        };
        copy = { ...formData[index].answer };
      } else {
        formData[index].answer = { ...original, [name]: value };
      }
      return;
    }

    formData[index].answer = {
      [name]: value
    };
  }

  function showError(input, text) {
    const formControl = input.parentElement;
    const errorElement = formControl.querySelector(".error-message");
    errorElement.innerText = text;
    errorElement.setAttribute("role", "alert");
    if (survey.classList.contains("form-error")) return;
    survey.classList.add("form-error");
  }

  function noErrors(input) {
    if (!input) {
      const errorElement = currentPanel.querySelector(".error-message");
      errorElement.textContent = "";
      errorElement.removeAttribute("role");
      survey.classList.remove("form-error");
      return;
    }
    const formControl = input.parentElement;
    const errorElement = formControl.querySelector(".error-message");
    errorElement.innerText = "";
    errorElement.removeAttribute("role");
  }

  function getName(input) {
    if (input.name === "age") return "Age";
    if (input.name === "country") return "Country";
    return `${input.id.charAt(0).toUpperCase()}${input.id.slice(1)}`;
  }

  function checkEmail(input) {
    if (input.value.trim() === "") {
      showError(input, `${getName(input)} is required`);
    } else {
      const pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if (pattern.test(input.value.trim())) {
        noErrors(input);
      } else {
        showError(input, "Email is not valid");
      }
    }
  }

  function checkRequired(input) {
    if (input.value.trim() === "") {
      showError(input, `${getName(input)} is required`);
    } else {
      noErrors(input);
    }
  }

  function checkSelection(input) {
    if (input.selectedIndex === 0) {
      showError(input, `${getName(input)} is required`);
    } else {
      noErrors(input);
    }
  }

  function checkAge(age) {
    if (age.value === "") {
      showError(age, `${getName(age)} is required`);
      return;
    }
    if (+age.value > 0) {
      noErrors(age);
    }
  }

  function checkRequirements() {
    const requirement = currentPanel.dataset.requirement;
    const index = currentPanel.dataset.index;
    const errorElement = currentPanel.querySelector(".error-message");

    if (!formData[index].hasOwnProperty("answer") && +index === 5) {
      checkRequired(question5Name);
      checkEmail(question5Email);
      checkSelection(question5Country);
      checkAge(question5Age);
    } else if (formData[index].hasOwnProperty("answer") && +index === 5) {
      const req = requirement.split(";");
      let data = Object.keys(formData[index].answer);
      let arr = [];
      let res;
      for (let i = 0; i < data.length; i++) {
        res = req.includes(data[i]) ? data[i] : "";
        arr.push(res);
      }
      if (arr.includes("name")) checkRequired(question5Name);
      if (arr.includes("email")) checkEmail(question5Email);
      if (arr.includes("country")) checkSelection(question5Country);
      if (arr.includes("age")) checkAge(question5Age);
      if (
        arr.length === 4 &&
        arr.every((elem) => formData[index].answer.hasOwnProperty(elem))
      ) {
        survey.classList.remove("form-error");
        dontSubmit = true;
      }
    } else {
      errorElement.textContent = `Select an ${requirement} to continue.`;
      errorElement.setAttribute("role", "alert");
      survey.classList.add("form-error");
    }
  }

  function updateProgressbarBar() {
    const index = currentPanel.dataset.index;
    let currentQuestion = formData[`${parseFloat(index)}`].question;
    progressbar.setAttribute("aria-valuenow", index);
    progressbar.setAttribute("aria-valuetext", currentQuestion);
    progressbarStep[index].classList.remove("active");
  }

  function displayNextPanel() {
    currentPanel.classList.remove("survey__panel--current");
    currentPanel.setAttribute("aria-hidden", true);
    currentPanel = currentPanel.nextElementSibling;
    currentPanel.classList.add("survey__panel--current");
    currentPanel.setAttribute("aria-hidden", false);
    updateProgressbar();
    if (+currentPanel.dataset.index > 1) {
      prevButton.disabled = false;
      prevButton.setAttribute("aria-hidden", false);
    }
    if (+currentPanel.dataset.index === 5) {
      nextButton.disabled = true;
      nextButton.setAttribute("aria-hidden", true);
      submitButton.disabled = false;
      submitButton.setAttribute("aria-hidden", false);
    }
  }

  function displayPrevPanel() {
    currentPanel.classList.remove("survey__panel--current");
    currentPanel.setAttribute("aria-hidden", true);
    currentPanel = currentPanel.previousElementSibling;
    currentPanel.classList.add("survey__panel--current");
    currentPanel.setAttribute("aria-hidden", false);
    updateProgressbarBar();
    if (+currentPanel.dataset.index === 1) {
      prevButton.disabled = true;
      prevButton.setAttribute("aria-hidden", true);
    }
    if (+currentPanel.dataset.index < 5) {
      nextButton.disabled = false;
      nextButton.setAttribute("aria-hidden", false);
      submitButton.disabled = true;
      submitButton.setAttribute("aria-hidden", true);
    }
  }

  function handleprevButton() {
    displayPrevPanel();
  }

  function handleNextButton() {
    const index = currentPanel.dataset.index;
    if (!formData[index].hasOwnProperty("answer")) {
      checkRequirements();
    } else {
      noErrors();
      displayNextPanel();
    }
  }

  // submitting the form
  function handleFormSubmit(e) {
    checkRequirements();
    if (!dontSubmit) {
      e.preventDefault();
    } else {
      mainElement.classList.add("submission");
      mainElement.setAttribute("role", "alert");
      mainElement.innerHTML = `<svg width="126" height="118" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126 118" aria-hidden="true" style="transform: translateX(50%)"><path d="M52.5 118c28.995 0 52.5-23.729 52.5-53S81.495 12 52.5 12 0 35.729 0 65s23.505 53 52.5 53z" fill="#B9CCED"/><path d="M45.726 87L23 56.877l8.186-6.105 15.647 20.74L118.766 0 126 7.192 45.726 87z" fill="#A7E9AF"/></svg>
      <h2 class="submission">Thanks for your time</h2>
      <p>The form was successfully submitted <br>
        <button class="button" type="button" name="next" style="margin-top: 20px;margin-left: 50px;" aria-label="Next" aria-hidden="false"><a href="/" style="text-decoration: none;color: white;">Return Back</a></button>`;
      return false;
    }
  }

  storeInitialData();
  

  // Add event listeners
  function addListenersTo({
    question1Radios,
    question2Radios,
    question3CheckBoxes,
    question4Radios,
    ...inputs
  }) {
    question1Radios.forEach((elem) =>
      elem.addEventListener("change", updateFormData)
    );
    question2Radios.forEach((elem) =>
      elem.addEventListener("change", updateFormData)
    );
    question3CheckBoxes.forEach((elem) =>
      elem.addEventListener("change", updateFormData)
    );
    question4Radios.forEach((elem) =>
      elem.addEventListener("change", updateFormData)
    );
    let {
      question4Textarea,
      question5Name,
      question5Email,
      question5Country,
      question5Age
    } = inputs;
    question4Textarea.addEventListener("change", updateFormData);
    question5Name.addEventListener("change", updateFormData);
    question5Email.addEventListener("change", updateFormData);
    question5Country.addEventListener("change", updateFormData);
    question5Age.addEventListener("change", updateFormData);
  }
  nextButton.addEventListener("click", handleNextButton);
  prevButton.addEventListener("click", handleprevButton);
  addListenersTo(options);
  survey.addEventListener("submit", handleFormSubmit);
}

const survey = Survey(document.querySelector(".survey"));

</script>
</html>