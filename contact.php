<?php include 'layouts/header.php'; ?>

<main>
    <section class="contact-page">
        <h1>Contact Me</h1>
        <div>
        <form id="contactform" novalidate>
            <!-- Personal Information -->
            <fieldset>
                <legend>Personal Information</legend>
                <div class="form-container">
                    <div>
                        <label for="name">Full Name:</label>
                        <input type="text" id="name" name="name" >
                        <span class="error"></span>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" >
                        <span class="error"></span>
                    </div>
                    <div>
                        <label for="phone">Phone:</label>
                        <input type="tel" id="phone" name="phone" >
                        <span class="error"></span>
                    </div>
                    <div>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" >
                        <span class="error"></span>
                    </div>
                </div>
            </fieldset>

            <!-- Project detail -->
                <fieldset>
                <legend>Project detail</legend>
                <div class="form-container">
                    <div>
                        <label for="budget">Project Budget ($):</label>
                        <input type="number" id="budget" name="budget" min="100" max="100000" step="100">
                        <span class="error"></span>
                    </div>
                    <div>
                        <label for="deadline">Project Deadline:</label>
                        <input type="date" id="deadline" name="deadline">
                        <span class="error"></span>
                    </div>
                    <div>
                        <label for="priority">Project Priority:</label>
                        <input type="range" id="priority" name="priority" min="1" max="10" value="5">
                        <span class="error"></span>
                    </div>
                    <div>
                        <label for="brand-color">Brand Color:</label>
                        <input type="color" id="brand-color" name="brand-color" value="#4a76ee">
                        <span class="error"></span>
                    </div>
                </div>
                </fieldset>

                <!-- Project Type -->
                <fieldset>
                <legend>Project Type</legend>
                <div class="form-container">
                    <div>
                        <label>Project Category:</label>
                        <div>
                            <input type="radio" id="web" name="project-type" value="web" required>
                            <label for="web">Web Development</label>
                            <span class="error"></span>
                        </div>
                        <div>
                            <input type="radio" id="app" name="project-type" value="app">
                            <label for="app">Mobile App</label>
                            <span class="error"></span>
                        </div>
                        <div>
                            <input type="radio" id="design" name="project-type" value="design">
                            <label for="design">UI/UX Design</label>
                            <span class="error"></span>
                        </div>
                    </div>
                    <div>
                        <label>Services Needed:</label>
                        <div>
                            <input type="checkbox" id="frontend" name="services" value="frontend">
                            <label for="frontend">Frontend Development</label>
                            <span class="error"></span>
                        </div>
                        <div>
                            <input type="checkbox" id="backend" name="services" value="backend">
                            <label for="backend">Backend Development</label>
                            <span class="error"></span>
                        </div>
                        <div>
                            <input type="checkbox" id="database" name="services" value="database">
                            <label for="database">Database Design</label>
                            <span class="error"></span>
                        </div>
                    </div>
                </div>
                </fieldset>

                <!-- Additional Information -->
                <fieldset>
                <legend>Additional Information</legend>
                <div class="form-container">
                    <div>
                        <label for="project-size">Project Size:</label>
                        <select id="project-size" name="project-size" required>
                            <option value="">Select Project Size</option>
                            <optgroup label="Small Projects">
                                <option value="small-basic">Basic Website</option>
                                <option value="small-landing">Landing Page</option>
                            </optgroup>
                            <optgroup label="Medium Projects">
                                <option value="medium-ecommerce">E-commerce Site</option>
                                <option value="medium-webapp">Web Application</option>
                            </optgroup>
                            <optgroup label="Large Projects">
                                <option value="large-enterprise">Enterprise System</option>
                                <option value="large-platform">Platform Development</option>
                            </optgroup>
                        </select>
                    </div>
                    <div>
                        <label for="description">Project Description:</label>
                        <textarea id="description" name="description" rows="4" required placeholder="Describe Your Project..."></textarea>
                        <span class="error"></span>
                    </div>
                    <div>
                        <label for="attachment">Project Files:</label>
                        <input type="file" id="attachment" name="attachment" accept=".pdf,.doc,.docx,.jpg,.png">
                    </div>
                    <div>
                        <label for="framework">Preferred Framework:</label>
                        <input type="text" id="framework" name="framework" list="framework-list">
                        <datalist id="framework-list">
                            <option value="React">
                            <option value="Vue">
                            <option value="Angular">
                            <option value="Svelte">
                            <option value="Next.js">
                            <option value="Nuxt.js">
                        </datalist>
                    </div>
                </div>
                </fieldset>

                <input type="hidden" id="submission-time" name="submission-time">

                <fieldset>
                <legend>Project Progress</legend>
                <div class="form-container">
                    <div>
                        <label for="progress">Current Progress:</label>
                        <progress id="progress" value="0" max="100">0%</progress>
                    </div>
                    <div>
                        <label for="satisfaction">Client Satisfaction:</label>
                        <meter id="satisfaction" min="0" max="100" low="30" high="80" optimum="90" value="75">75%</meter>
                    </div>
                </div>
                </fieldset>
                <div class="button-container">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset Form</button>
                </div>
        </form>
        </div>
    </section>
</main>



<?php include 'layouts/footer.php'; ?>