@extends('db.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form method="POST" action="/regComplaint" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h5 class="title">New Complaint</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Your Designation</label>
                                <input name="udesg" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Organization Name</label>
                                <input name="org" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Contact Person/Head of the Organisation</label>
                                <input name="contact" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name of Accused/Respondent</label>
                                <input name="accused" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Designation of Accused/Respondent</label>
                                <input name="adesg" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>State</label>
                                <input name="state" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>District</label>
                                <input name="district" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Your Statement</label>
                                <textarea name="statement" rows="4" cols="80" class="form-control" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Upload Video</label>
                                <input type="file" name="videoData" class="form-control" placeholder="Click here"
                                    required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
