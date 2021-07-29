<div class="modal fade" id="job-application-modal" tabindex="-1" role="dialog" aria-labelledby="job-application-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content  p-4">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title p-0 w-100 my-auto title-personal-info" id="job-application-modalLabel">
                    Job Application
                </h5>
            </div>
            <form id="job_application_form">
                <div class="modal-body">
                    

                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="contact-info" class="form-control profile-info-forms-items"  placeholder="Contact Information">
                            </div>
                        </div>
                    </div> -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" required name="application_subject" class="form-control profile-info-forms-items"  placeholder="Subject">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                <textarea required class="form-control" name="application_message" id="message-text"></textarea>
                            </div>
                        </div>
                    </div>



                    
                </div>
                <div class="modal-footer">
                <div class="row">
                    <div class="col-md-4 " style="text-transform: capitalize; font-size:12px; color:#f0af61; font-weight:600px;">
                            <i>daily limit for job application (1/10)</i>

                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-6 text-right pr-0">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-primary">Apply</button>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    let job_id = urlParams.get('job_id');

    $('#job_application_form').on('submit', function(e) {
        e.preventDefault();
        let application_subject = $(this).find('[name="application_subject"]').val();
        let application_message = $(this).find('[name="application_message"]').val();
        let data = {
            client_job_post_id: job_id,
            client_id: jobpost_data.client.id,
            jobseeker_id: userdata.jobseeker.id,
            application_subject: application_subject,
            application_message: application_message,
            date_applied: moment().format('YYYY-MM-DD')
        };

        postData('/api/ClientEmployee',data, ({data:res}) => {
            console.log(res);
            if(res.success) {
                alert('Application Sent');
                window.location.href = '/jobseekerDashboard';
            }
        })
    });
</script>