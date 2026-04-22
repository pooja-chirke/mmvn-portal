@extends('layouts.app')

@section('content')

<style>

.help-page{
padding:60px 10%;
background:#f4f6f9;
}

.help-title{
text-align:center;
font-size:32px;
margin-bottom:40px;
}

.faq-container{
max-width:800px;
margin:auto;
}

.faq-item{
background:white;
padding:20px;
margin-bottom:15px;
border-radius:6px;
box-shadow:0 4px 10px rgba(0,0,0,0.08);
}

.faq-item h3{
font-size:18px;
margin-bottom:8px;
}

.faq-item p{
font-size:14px;
color:#555;
}

.support-box{
margin-top:40px;
background:#ffffff;
padding:25px;
border-radius:6px;
box-shadow:0 4px 10px rgba(0,0,0,0.08);
text-align:center;
}

.back-btn{
display:inline-block;
margin-top:30px;
padding:10px 20px;
background:#198754;
color:white;
text-decoration:none;
border-radius:5px;
}

</style>


<!-- HELP SECTION -->

<section class="help-page">

<h2 class="help-title">Help & Support</h2>

<div class="faq-container">

<div class="faq-item">
<h3>How can I join MMVN programs?</h3>
<p>
You can participate in our programs by registering through the
Get Involved page or by contacting your nearest MMVN office.
</p>
</div>

<div class="faq-item">
<h3>Are training courses free?</h3>
<p>
Many of our training programs are free or subsidized for women
from economically weaker sections.
</p>
</div>

<div class="faq-item">
<h3>How can I volunteer with MMVN?</h3>
<p>
Visit the Get Involved section and fill out the volunteer form.
Our team will contact you with further details.
</p>
</div>

<div class="faq-item">
<h3>Where can I find learning resources?</h3>
<p>
All learning materials, guides, and training content are available
in the Resources section of the Knowledge Center.
</p>
</div>

</div>


<div class="support-box">

<h3>Need More Help?</h3>

<p>Contact our support team.</p>

<p>Email: support@mmvn.org</p>

<p>Phone: 022-78567890</p>

</div>


<div style="text-align:center;">
<a href="{{ url('/knowledge') }}" class="back-btn">
Back to Knowledge Center
</a>
</div>

</section>

@endsection