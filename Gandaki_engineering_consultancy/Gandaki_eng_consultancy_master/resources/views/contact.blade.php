@extends('template')
@section('content')
<section id="contactus">
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3515.6578724499623!2d83.99899151502684!3d28.217705382583233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595a42699f471%3A0x55ad7ad3d6fe7040!2sGandaki%20Engineering%20Consultancy%20Pvt%20Ltd.!5e0!3m2!1sen!2snp!4v1677853799909!5m2!1sen!2snp" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6">
            <div class="form-contact">
                <h3>Contact us</h3>
                <p style="color: red;">Get in touch</p>
            </div>
            
            <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label><br>
            <textarea name="subject" id="subject" cols="70" rows="3"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary " >Submit</button><br><br>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection