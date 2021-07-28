@extends('layouts.blank-layout')

@section('content')

<div class="user-dashboard h-auto">
    <div class="container fullwidth" style="min-height: 80vh;">
    <!-- Content Sart -->

        <!-- Breadcrumbs Start -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Messages</li>
            </ol>
        </nav>
        <!-- Breadcrumbs End -->

        <div class="card-w-100">
            <div class="card-header">

                <!-- NavTabs List Start -->
                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="boInbox-tab" data-toggle="tab" href="#boInbox" role="tab" aria-controls="boInbox" aria-selected="true">Inbox</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="boOutBox-tab" data-toggle="tab" href="#boOutBox" role="tab" aria-controls="boOutBox" aria-selected="false">Outbox</a>
                    </li>
                </ul>
                <!-- NavTabs List End -->

                <!-- Tab Content Start -->
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="boInbox" role="tabpanel" aria-labelledby="boInbox-tab">
                        <div class="wrapper">

                        <div class="col">

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#boNewMessage">New Message</button>


                            <div class="modal fade" id="boNewMessage" tabindex="-1" role="dialog" aria-labelledby="boNewMessageLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="boNewMessageLabel">New message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">To:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">CC:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">BCC:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>

                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Subject:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
                                    <button type="button" class="btn btn-primary">Send</button>
                                </div>
                                </div>
                            </div>
                            </div>

                        </div> <br>


                            <table class="table"">
                                <thead>
                                    <tr>
                                        <th>
                                            Subject
                                        </th>
                                        <th>
                                            Recepient
                                        </th>
                                        <th>
                                            Date
                                        </th>
                                        <th>
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </td>
                                        <td>
                                            Jande Doe
                                        </td>
                                        <td>
                                            June 10, 2021
                                        </td>
                                        <td>
                                            <button class="btn btn-info" data-toggle="modal" data-target="#boReply">Reply</button>
                                            <button class="btn  btn-warning">Attach</button>
                                            <button class="btn  btn-danger">Delete</button>


                                            <div class="modal fade" id="boReply" tabindex="-1" role="dialog" aria-labelledby="boReplyLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="boReplyLabel">Reply</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>

                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">To:</label>
                                                            <input type="text" class="form-control" id="recipient-name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">CC:</label>
                                                            <input type="text" class="form-control" id="recipient-name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">BCC:</label>
                                                            <input type="text" class="form-control" id="recipient-name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Subject:</label>
                                                            <textarea class="form-control" id="message-text"></textarea>
                                                        </div>

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
                                                        <button type="button" class="btn btn-primary">Send</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="boOutBox" role="tabpanel" aria-labelledby="boOutBox-tab">

                        <div class="wrapper">
                            <table class="table"">
                                <thead>
                                    <tr>
                                        <th>
                                            Subject
                                        </th>
                                        <th>
                                            Recepient
                                        </th>
                                        <th>
                                            Date
                                        </th>
                                        <th>
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </td>
                                        <td>
                                            Jande Doe
                                        </td>
                                        <td>
                                            June 10, 2021
                                        </td>
                                        <td>
                                            <button class="btn  btn-warning">Attach</button>
                                            <button class="btn  btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>



                <!-- Tab Content End -->



            </div>
        </div>



    <!-- Content End -->
    </div>
</div>

@endsection
