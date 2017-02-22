<template lang="html">
    <div role="main" class="main">

    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="offset-anchor" id="contact-sent"></div>
                <h2 class="short"><strong>Contact</strong> Us</h2>
                <form id="contactFormAdvanced" @submit.prevent="validateBeforeSubmit">
                
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Your name *</label>
                                <input type="text" value="" v-model="contact.name"  v-validate.initial="name" data-vv-rules="required" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name"  >
                                  <p class="text-danger" v-if="errors.has('name')">{{ errors.first('name') }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>Your email address *</label>
                                <input type="email" value="" v-validate.initial="email" data-vv-rules="required|email" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" v-model="contact.email" required>
                                  <p class="text-danger" v-if="errors.has('email')">{{ errors.first('email') }}</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Subject *</label>
                                  <input type="text" value="" v-validate.initial="subject" data-vv-rules="required" data-msg-required="Please enter your subject." maxlength="100" class="form-control" name="subject" v-model="contact.subject" >
                                  <p class="text-danger" v-if="errors.has('subject')">{{ errors.first('subject') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Message *</label>
                                <textarea maxlength="5000" v-validate.initial="message" data-vv-rules="required" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" v-model="contact.message" id="message" ></textarea>
                                 <p class="text-danger" v-if="errors.has('message')">{{ errors.first('message') }}</p>
                            </div>
                        </div>
                    </div>
                  <div class="row">
                      <div class="col-md-12">
                          <label>Human Verification *</label>
                      </div>
                  </div> 
                    <div class="row">
                  </div> 
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" id="contactFormSubmit" class="btn btn-primary btn-lg pull-right">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h4 class="push-top">Get in <strong>touch</strong></h4>
                <p>Hanusoft is an IT club, working in Faculty of Information Technology. Taking part in Hanusoft if you have passion with programming. </p>
                <hr />
                <h4>The <strong>Office</strong></h4>
                <ul class="list-unstyled">
                    <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> Hanoi University Km9 Nguyen Trai, Thanh Xuan, Ha Noi</li>
                    <li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-7890</li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:hanusoft.dev@gmail.com">hanusoft.dev@gmail.com</a></li>
                </ul>
                <hr />
                <h4>Business <strong>Hours</strong></h4>
                <ul class="list-unstyled">
                    <li><i class="fa fa-time"></i> Monday - Friday 9am to 5pm</li>
                    <li><i class="fa fa-time"></i> Saturday - 9am to 2pm</li>
                    <li><i class="fa fa-time"></i> Sunday - Closed</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    import { default as swal } from 'sweetalert2';
    export default{
        data(){
            return {
                contact:[],
                canSubmit: false,
            }
        },
        methods: {
            validateBeforeSubmit(e) {
                this.$validator.validateAll();
                if (!this.errors.any()) {
                    this.sendContact();
                }
            },
            sendContact(){
                let contact = this.contact;
                this.$http.post('api/guest/contact/send', {name:contact.name,email:contact.email,subject:contact.subject,message:contact.message}).then(response=> {
                       swal({
                          title: 'Success!',
                          text: 'Do you want to continue',
                          type: 'success',
                          confirmButtonText: 'OK'
                        });
                });
            },

        }
    }
</script>
