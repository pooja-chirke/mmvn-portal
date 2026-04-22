@extends('layouts.app')

@section('content')

<!-- ================= PAGE HEADER ================= -->

<section class="about-header">
    <h1>COE Team</h1>
    <p>Leadership Driving Women Empowerment Initiatives</p>
</section>



<!-- ================= ABOUT COE ================= -->

<section class="content-section">

<div class="content-container">

<div class="content-text">

<h2>Central of Excellence (COE)</h2>

<p>
The COE team at MMVN plays a vital role in designing, implementing,
and strengthening women empowerment programs through research,
technical expertise, and strategic partnerships.
</p>

<p>
Our team collaborates with government bodies, NGOs, and community
groups to ensure sustainable development and impactful initiatives.
</p>

</div>

<div class="content-image">
<img src="{{ asset('images/team/coe-group.jpg') }}">
</div>

</div>

</section>



<!-- ================= TEAM MEMBERS ================= -->

<section class="team-section">

<h2 class="text-center">Our Leadership Team</h2>

<div class="team-container">


<!-- MEMBER 1 -->
<div class="team-card">
    <img src="{{ asset('images/team/director.jpg') }}">
    <h3>Dr. Anuj Deshmukh</h3>
    <p class="role">Program Director</p>
    <p>Leads strategic planning and ensures successful execution of programs.</p>
</div>


<!-- MEMBER 2 -->
<div class="team-card">
    <img src="{{ asset('images/team/advisor.jpg') }}">
    <h3>Riya Patil</h3>
    <p class="role">Technical Advisor</p>
    <p>Provides expert guidance on training and development initiatives.</p>
</div>


<!-- MEMBER 3 -->
<div class="team-card">
    <img src="{{ asset('images/team/research.jpg') }}">
    <h3>Pratik Kulkarni</h3>
    <p class="role">Research Specialist</p>
    <p>Focuses on data, insights, and documentation of program impact.</p>
</div>


<!-- MEMBER 4 -->
<div class="team-card">
    <img src="{{ asset('images/team/policy.jpg') }}">
    <h3>Sneha Joshi</h3>
    <p class="role">Policy Coordinator</p>
    <p>Works with stakeholders to strengthen gender equality policies.</p>
</div>


<!-- MEMBER 5 -->
<div class="team-card">
    <img src="{{ asset('images/team/community.jpg') }}">
    <h3>Mohan Shinde</h3>
    <p class="role">Community Coordinator</p>
    <p>Connects with SHGs and ensures grassroots implementation.</p>
</div>

</div>

</section>



<!-- ================= COMMITMENT ================= -->

<section class="impact-section">

<div class="impact-container">

<h2>Our Commitment</h2>

<p>
The COE team is committed to building a strong knowledge ecosystem
through innovation, collaboration, and evidence-based practices.
</p>

<p>
We aim to create long-term impact by empowering women with skills,
resources, and leadership opportunities.
</p>

</div>

</section>

@endsection