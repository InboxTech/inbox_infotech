@extends('afrontend/layout')
@section('page_title', 'HR Tech')
<?php $s1 = 'index,follow'; ?>
<?php $s2 = 'A managed cloud services provider manages partial or complete cloud platforms of their clients, including the migration, maintenance and optimization.'; ?>
<?php $s3 = 'web development company,web design company,web application development,best web development company,web development company india,web development company vadodara'; ?>
<?php $s4 = 'https://inboxtechs.com'; ?>
@section('seo_noindex_tag', "$s1")
@section('seo_description', "$s2")
@section('seo_keyword', "$s3")
@section('seo_canonical', "$s4")


@section('container')
    <main class="main" id="top">
        <div class="preloader" id="preloader">
            <div class="loader">
                <div class="line-scale">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>

        <section class="py-0">
            <div class="swiper theme-slider min-vh-100"
                data-swiper='{"loop":true,"allowTouchMove":false,"autoplay":{"delay":5000},"effect":"fade","speed":800}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-zanim-timeline="{}">
                        <div class="bg-holder">
                            <img src="{{ asset('storage/media/HRMS.jpg') }}" alt="hrms" class="lcp-image" fetchpriority="high"  width="1920" height="1080" loading="lazy">
                        </div>
                        <!--/.bg-holder-->
                        <div class="container">
                            <div class="row min-vh-100 py-8 align-items-center justify-content-center"
                                data-inertia='{"weight":1.5}'>
                                <div class="col-sm-8 col-lg-8 px-5 px-sm-3"
                                    style="background-color: #ffffff88; padding:30px; border-radius: 10px;">
                                    <div class="overflow-hidden">
                                        <p class="fs-4 fs-md-5 lh-1 text-color  banner-title fade-in-up">
                                            HRMS & Payroll Management System With Mobile App</p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color" data-zanim-xs='{"delay":0.1}'>
                                            Streamline Your HR Operations and Overcome Workforce Management Challenges with
                                            Our Advanced HRMS Solution. </p>
                                    </div>
                                    <div class="button-group fade-in">
                                        <a class="btn btn-primary me-3 mt-3" href="{{ url('/about-us') }}">
                                            Read more <span class="fas fa-chevron-right ms-2"></span>
                                        </a>
                                        <a class="btn btn-warning mt-3" href="{{ url('/contact-us') }}">
                                            Contact us <span class="fas fa-chevron-right ms-2"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @foreach ($slider as $list) @endforeach --}}
                </div>
               
            </div>
        </section>

        <!-----------------------------   client swiper start ---------------------------->
        <section>
            <div class="client">
                <div class="container">
                    <div class="swiper myClientSwiper">
                        <div class="swiper-wrapper">
                            @foreach ($clientlogos as $clogolist)
                                <div class="swiper-slide">
                                    {{-- <div style="width: 100%;"> --}}
                                    <img class="w-100 h-100" src="{{ asset('storage/media/' . $clogolist->image) }}"
                                        alt="partnerco" data-zanim-xs="{}" loading="lazy" />
                                    {{-- </div> --}}
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="swiper-pagination"></div> --}}
                    </div>
                </div>
            </div>
        </section>

        <!-----------------------------   client swiper end ---------------------------->

        <div class="container">

            <!------------------------------------ HR Management start ------------------------->
            <section>
                <div class="">
                    <div class="row">
                        {{-- <h2 class="mb-5 text-center">Transform Your Workforce Management</h2> --}}
                        <div class="col-lg-6">
                            <h3> About Us </h3>
                            <p> A modular enterprise platform is designed to manage people, projects, performance, assets,
                                customer relations, and financial needs accessible via a responsive web portal
                                and mobile application for employees and managers. This robust solution will empower
                                organization to automate workflows, enhance employee engagement, improve
                                decision-making, and scale seamlessly. </p>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <img src="{{ asset('assets/inbox/HRMS.png') }}" class="w-100 h-100" alt="hrms" loading="lazy"/>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!------------------------------------ HR Management end ------------------------->

            <!-----------------------------   Key modules start   ---------------------------->

            <section class="" style="padding-top:50px; padding-bottom:50px;">
                <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class=" text-color" style=""> Key Modules </h2>
                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                     <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/recruitment.svg') }}" alt="recruitment"
                                    class="core-img w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy" />
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Recruitment</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/HRMS_Payroll.svg') }}" alt="hrms-payroll"
                                    class="core-img w-100 h-100" data-zanim-xs='{"delay":0}'  loading="lazy"/>
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>HRMS & Payroll</h5>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/Loan_ Advance.svg') }}" alt="loan advance"
                                    class="core-img w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy" />
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Loan & Advance </h5>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/Employee_Self-Service(ESS).svg') }}" alt="ess"
                                    class="core-img w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Employee Self-Service (ESS)</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/Performance_Management.svg') }}" alt="performance management"
                                    class="core-img w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Performance Management </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/Expanse_Management.svg') }}"
                                    alt="expanse" class="core-img w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Expanse Management</h5>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/Asset_Management.svg') }}" alt="asset"
                                    class="core-img w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Asset Management</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/Project_Management.svg') }}" alt="project"
                                    class="core-img w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy" />
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Project Management</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/Helpdesk.svg') }}" alt="helpdesk"
                                    class="core-img w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy" />
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Helpdesk</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-----------------------------   Key modules end   ---------------------------->

            <!------------------------ our hrms product start ----------------------->

            {{-- <section>
                <div>
                    <div class="row">

                        <div class="col-lg-6 my-3">
                            <h3> Our HRMS Product </h3>
                            <p class="mt-4"> Our HRMS is a comprehensive, cloud-based solution that streamlines HR operations, from recruitment to payroll and performance management. It offers employee self-service, attendance tracking, compliance tools, and real-time analytics. Designed for scalability and ease of use, it empowers HR teams to save time, improve accuracy, and enhance the employee experience across the organization. </p>
                        </div>
                        <div class="col-lg-6 my-3">

                    <img src="{{ asset('assets/inbox/HRMS_product.png') }}" class="w-100 h-100" alt="hrms product" loading="lazy"/>

                        </div>
                    </div>
                </div>
            </section> --}}

            <!------------------------ our hrms product end ----------------------->
 <!------------------------  Key Features of Recruitment Module start ----------------------->
            <section class="my-5">
               <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2> Key Features of Recruitment Module</h2>
               </div>
               <div class="my-5">
                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Job Posting and Vacancy Management</h5>
                            <p> Enable HR managers to create job postings, including job descriptions, qualifications, roles, responsibilities, and required skills.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Candidate Sourcing & Applications</h5>
                            <p> Allow candidates to apply through the HRMS platform via a userfriendly interface. Support file uploads for resumes and cover letters.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Candidate Profile & Database</h5>
                            <p> Maintain a centralized repository of all candidates, storing their details like resumes, cover letters, interview feedback, and other relevant information.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Screening & Shortlisting</h5>
                            <p> Maintain a centralized repository of all candidates, storing their details like resumes, cover letters, interview feedback, and other relevant information.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5>Collaboration and Feedback</h5>
                            <p> Allow multiple team members (HR, hiring managers, and technical leads) to collaborate during the hiring process.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Offer Management</h5>
                            <p>Generate offer letters directly from the HRMS platform with customizable templates (salary,benefits, joining date, etc.).</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Interview Scheduling & Coordination</h5>
                            <p> Send interview invitations to shortlisted candidates, including details on the interview time, location, and format (in-person,virtual).</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Candidate Engagement</h5>
                            <p>Send automated and manual email templates for acknowledging applications,interview invites, and rejection notices.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Onboarding Integration</h5>
                            <p> Automatically trigger an onboarding checklist for new hires once the offer is accepted (e.g.,document submission, orientation session).</p>
                        </div>
                    </div>
                </div>
               </div>
            </section>
        <!------------------------  Key Features of Recruitment Module end ----------------------->

        <!------------------------  Key Features of HRMS & Payroll Module start ----------------------->
            <section class="hrms my-5">
               <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2> Key Features of HRMS & Payroll Module</h2>
               </div>
               <div class="my-5">
                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 p-3">
                            <h5> Employee Profile Management</h5>
                            <p> Store and manage personal details like name, address, bank account information, and tax details.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 p-3">
                            <h5> Tax Calculation & Deductions</h5>
                            <p> Calculate income tax based on local tax regulations (progressive tax slabs, exemptions, etc.)</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 p-3">
                            <h5> Payment Disbursementt</h5>
                            <p> Integrate with banks to facilitate direct deposit (ACH payments) of salaries into employee bank accounts.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 p-3">
                            <h5> Salary Structure Configuration</h5>
                            <p> Define multiple salary components (e.g., basic, HRA, allowances, deductions, bonuses).</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 p-3">
                            <h5>Payroll Calculation & Processing</h5>
                            <p> Automatically calculate net pay after considering basic salary, allowances, deductions, bonuses, and taxes.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 p-3">
                            <h5> Compliance & Statutory Reporting</h5>
                            <p> Generate and store reports required for statutory compliance (e.g., TDS returns,PF/ESI reports).</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 p-3">
                            <h5> Leave Management Integration</h5>
                            <p> Automate the calculation of earned leave, sick leave, and casual leave.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 p-3">
                            <h5> Payslip Generation & Distribution</h5>
                            <p> Generate detailed payslips with a breakdown of salary components, tax deductions, and leave balances.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 p-3">
                            <h5> Biometric Integration</h5>
                            <p> Biometric ready integration for Matrix, eSSL, ZKTeco.</p>
                        </div>
                    </div>
                </div>
               </div>
            </section>
        <!------------------------  Key Features of HRMS & Payroll Module end ----------------------->
        </div>

        <div class="container-fluid bg-primary">
<!------------------------  Key Features of Loan & Advance Management Module start ----------------------->
            <section class="my-5">
                <div class="container">
                    <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                     <h2 class="text-white"> Key Features of Loan & Advance Management Module</h2>
                    </div>
                    <div class="my-5">
                     <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-lg-3 my-3">
                             <div class="card h-100 p-3">
                                 <h5> Loan & Advance Application </h5>
                                 <p style="color: #00406d;"> Employees can submit requests for loans or salary advances via the ESS portal or mobile app. </p>
                             </div>
                        </div>
                        <div class="col-lg-3 my-3" >
                             <div class="card h-100 p-3">
                                 <h5> Loan Approval Workflow</h5>
                                 <p style="color: #00406d;"> Configurable approval chain (e.g., Reporting Manager → HR → Finance). </p>
                             </div>
                        </div>
                        <div class="col-lg-3 my-3">
                             <div class="card h-100 p-3">
                                 <h5> EMI & Repayment</h5>
                                 <p style="color: #00406d;"> Automatic EMI calculation based on loan amount, interest rate, and tenure.</p>
                             </div>
                        </div>
                        <div class="col-lg-3 my-3">
                             <div class="card h-100 p-3">
                                 <h5> Loan Configuration</h5>
                                 <p style="color: #00406d;"> Define loan types, interest rate policies (flat/reducing), and limits.</p>
                             </div>
                        </div>

                     </div>
                    </div>

                </div>
            </section>
        <!------------------------  Key Features of Loan & Advance Management Module end ----------------------->
</div>
<div class="container">
<!------------------------  Key Features of ESS (Employee Self Service) Module start ----------------------->
            <section class="my-5">
               <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2> Key Features of ESS (Employee Self Service) Module</h2>
               </div>
               <div class="my-5">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-3 col-md-6 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Personal Information (PI) Management </h5>
                            <p> Employees can view and edit their name, date of birth, gender, marital status, phone numbers, email addresses, residential address and other personal data. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Leave Management</h5>
                            <p> Submit leave requests and track across various types (sick, casual, earned, maternity, etc.). Realtime tracking of leave entitlement and usedleaves. Multi-level approval process (e.g.,Manager → HR).</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5>Attendance Tracking</h5>
                            <p> Daily attendance data with punch-in/out times. Submit correction requests for missed or incorrect punches.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Salary tracking</h5>
                            <p> Download detailed monthly payslips. Year-todate view of income and statutory deductions.Enter planned investments to reduce tax burden.</p>
                        </div>
                    </div>

                </div>
               </div>
            </section>
        <!------------------------  Key Features of ESS (Employee Self Service) Module end ----------------------->

 <!------------------------  Key Features of PERFORMANCE MANAGEMENT Module start ----------------------->
            <section class="my-5">
               <div class="" data-aos="fade-up" data-aos-duration="1000">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sticky-top" style="top: 100px; bottom: 100px; z-index: 0;">
                        <h2> Key Features of Performance Management Module</h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card p-3">
                            <h5> Continuous Feedback Mechanism</h5>
                            <p> Facilitate continuous feedback by enabling managers, peers, and subordinates to provide real-time feedback on employee performance.</p>
                        </div>
                        <div class="card  p-3">
                            <h5> Performance Appraisal System </h5>
                            <p> Collect feedback from multiple sources (e.g., managers, peers, subordinates) to get a comprehensive evaluation of an employee’s performance.</p>
                        </div>
                        <div class="card  p-3">
                            <h5> Goal Setting & Alignment</h5>
                            <p> Define Key Performance Indicators (KPIs) for employees based on their roles and track progress toward achieving them.</p>
                        </div>
                         <div class="card  p-3">
                            <h5> Competency and Skills Management</h5>
                            <p> Create a comprehensive skills matrix for each employee, tracking their competencies and identifying areas for improvement.</p>
                        </div>
                        <div class="card  p-3">
                            <h5>Performance Tracking and Reporting</h5>
                            <p> A visual, user-friendly dashboard that allows managers to quickly track employee performance, goal progress,and feedback.</p>
                        </div>
                    </div>
                </div>
               </div>

            </section>
        <!------------------------  Key Features of PERFORMANCE MANAGEMENT Module end ----------------------->
</div>

<div class="container-fluid" style="background-color: #e8f9ff;">
        <!------------------------  Key Features of EXPENSE MANAGEMENT start ----------------------->
            <section class="my-5">
                <div class="container">

                    <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                     <h2> Key Features of Expense Management</h2>
                    </div>
                    <div class="my-5">
                     <div class="row justify-content-between">
                         <div class="col-lg-6 d-flex justify-content-between">
                             <div>
                                 <div style="border-bottom: 1px solid #00406d;">
                                    <div class=" my-3 h-100 p-3">
                                         <h5> Expense Tracking </h5>
                                         <ul>
                                            <li>Record and categorize expenses (travel, meals, office supplies, etc.)</li>
                                            <li>Upload receipts via mobile or web</li>
                                            <li>Real-time capture of spending </li>
                                         </ul>
                                    </div>
                                 </div>

                                 <div style="border-bottom: 1px solid #00406d;">
                                    <div class=" my-3 h-100 p-3">
                                        <h5> Multi-currency & Tax Support </h5>
                                         <ul>
                                            <li>Convert and track foreign expenses</li>
                                            <li>Apply local tax rules (GST, VAT, etc.)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div style="border-bottom: 1px solid #00406d;">
                                    <div class=" my-3 h-100 p-3">
                                        <h5> Mobile App Access</h5>
                                        <ul>
                                            <li>Submit expenses on-the-go</li>
                                            <li>Push notifications for approvals and reminders</li>
                                        </ul>
                                    </div>
                                </div>
                             </div>

                             <div class="vr d-lg-block d-none"></div>
                         </div>
                         <div class="col-lg-6">
                             <div style="border-bottom: 1px solid #00406d;">
                                 <div class=" my-3 h-100 p-3">
                                 <h5>Real-time Analytics & Reports</h5>
                                <ul>
                                 <li>View spending trends, top expense categories, and employee-wise spend </li>
                                 <li>Generate reports for audits and budgeting </li>
                                </ul>
                             </div>
                             </div>

                             <div class="" style="border-bottom: 1px solid #00406d;">
                                 <div class=" my-3 h-100 p-3">
                                 <h5>Multi-level Approval Workflows</h5>
                                 <ul>
                                     <li>Route expense reports through various approvers</li>
                                     <li> Enable conditional approvals based on amount or department</li>
                                 </ul>
                             </div>
                             </div>
                                <div style="border-bottom: 1px solid #00406d;">
                                 <div class=" my-3 h-100 p-3">
                                 <h5>Reimbursement Automation</h5>
                                 <ul>
                                     <li>Calculate reimbursable amounts</li>
                                     <li>Schedule or automate employee reimbursements</li>
                                 </ul>
                             </div>
                             </div>
                         </div>
                     </div>
                    </div>
                </div>
               
            </section>
        <!------------------------  Key Features of EXPENSE MANAGEMENT end ----------------------->
</div>

<div class="container">
        <!------------------------  Key Features of Asset Management Module start ----------------------->
            <section class="my-5">
               <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2> Key Features of Asset Management Module</h2>
               </div>
               <div class="my-5">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-3 col-md-6 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Asset Inventory Management </h5>
                            <p> Maintain a centralized inventory of all company assets, including both physical (e.g., laptops,office furniture) and digital (e.g., software licenses, subscriptions)</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Asset Assignment & Distribution </h5>
                            <p> Assign assets (e.g., laptops, mobile phones) to employees when they join the company, ensuring that each employee is equipped with the necessary tools to do their job. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Asset Request & Approval Process</h5>
                            <p> Allow employees to submit requests for specific assets (e.g., new laptops, software tools) through the HRMS portal,including reasons for the request. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Asset Lifecycle Management</h5>
                            <p> Track the lifecycle of assets, from acquisition to retirement. This includes recording the depreciation rate and expected lifespan of each item.</p>
                        </div>
                    </div>

                </div>
               </div>
            </section>
        <!------------------------  Key Features of Asset Management Module end ----------------------->



<!------------------------  Key Features of Project Management  Module start ----------------------->
            <section class="project-mng my-5">
               <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2> Key Features of Project Management  Module</h2>
               </div>
               <div class="my-5">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Project Creation and Planning</h5>
                            <p> Allow managers or project leads to create new projects by specifying key details like project name, description, start and end dates, , and budget. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Team Collaboration & Communication </h5>
                            <p> Assign employees to specific projects or tasks based on their skills, experience, and availability. Employees can also be added to specific teams. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Task and Time Management</h5>
                            <p> Create, assign, and track tasks and subtasks.Employees can view their tasks, set priorities, and mark tasks as completed.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5> Resource Management</h5>
                            <p> Track the availability of employees, teams, and equipment, and ensure that resources are allocated optimally across different projects.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5>Progress Tracking & Reporting</h5>
                            <p>Provide a customizable dashboard that tracks the progress of each project, including task completion status, resource utilization, milestones ,and financial performance.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card h-100 shadow p-3">
                            <h5>Timesheet Submission & Approval</h5>
                            <p>Employees can log hours daily or weekly against specific projects and tasks. Support for full-time,part-time, and remote work scenarios.Configure multi-level approval chains (e.g., project lead → department head).</p>
                        </div>
                    </div>
                </div>
               </div>
            </section>
        <!------------------------  Key Features of Project Management  Module end ----------------------->


        </div>

        <!-- ============================================-->
        <!-- <section> rquest a callback begin ============================-->
        <section class="bg-primary p-5 my-5">
            <div class="container-fluid">
                <div class="row align-items-center text-white">
                    <div class="col-lg-4">
                        <div class="border border-2 border-white p-4 py-lg-5 text-center rounded-3"
                            data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h4 class="text-white" data-zanim-xs='{"delay":0}'>Request a call back</h4>
                            </div>
                            <div class="overflow-hidden">
                                <p class="px-lg-1 text-100 mb-0" data-zanim-xs='{"delay":0.1}'>Would you like to speak
                                    to
                                    one of our advisers over the phone? Just submit your details and we’ll be in touch
                                    shortly. You can also email us if you would prefer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 ps-lg-5 mt-6 mt-lg-0 ">
                        <div class="bg-white rounded-3 p-4 call-back-form">
                            <h5 class="text-color mb-4">I would like to discuss:</h5>
                            <form action="{{ url('contactus/form/submit') }}" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <input class="form-control" type="text" name="name"
                                            placeholder="Your Name" aria-label="Your Name" />
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex">
                                            <!-- Country Code Dropdown -->
                                              <label for="country_code" style="position: absolute;
                                                    width: 1px;
                                                    height: 1px;
                                                    padding: 0;
                                                    margin: -1px;
                                                    overflow: hidden;
                                                    clip: rect(0, 0, 0, 0);
                                                    white-space: nowrap;
                                                    border: 0;">Country Code</label>
                                            <select class="form-select" name="country_code" style="max-width: 110px;"
                                                required>
                                                <option value="+91" selected>+91 (IN)</option>
                                                <option value="+1">+1 (US)</option>
                                                <option value="+44">+44 (UK)</option>
                                                <option value="+61">+61 (AU)</option>
                                                <option value="+81">+81 (JP)</option>
                                                <option value="+49">+49 (DE)</option>
                                                <option value="+33">+33 (FR)</option>
                                                <option value="+39">+39 (IT)</option>
                                                <option value="+34">+34 (ES)</option>
                                                <option value="+82">+82 (KR)</option>
                                                <option value="+86">+86 (CN)</option>
                                                <option value="+55">+55 (BR)</option>
                                                <option value="+7">+7 (RU)</option>
                                                <option value="+41">+41 (CH)</option>
                                                <option value="+31">+31 (NL)</option>
                                                <option value="+46">+46 (SE)</option>
                                                <option value="+45">+45 (DK)</option>
                                                <option value="+358">+358 (FI)</option>
                                                <option value="+351">+351 (PT)</option>
                                                <option value="+36">+36 (HU)</option>
                                                <option value="+420">+420 (CZ)</option>
                                                <option value="+421">+421 (SK)</option>
                                                <option value="+43">+43 (AT)</option>
                                                <option value="+32">+32 (BE)</option>
                                                <option value="+353">+353 (IE)</option>
                                            </select>
                                            <!-- Phone Input -->
                                            <input class="form-control bg-white" type="tel" name="phone"
                                                placeholder="Phone number" />
                                        </div>
                                    </div>
                                    <div class="col-12"><input class="form-control" type="email" name="email"
                                            placeholder="Email" aria-label="Email" /></div>
                                    <div class="col-12">
                                        <textarea class="form-control" name="message" id="" rows="4" placeholder="Subject"
                                            aria-label="Enter your Descriptions here..."></textarea>
                                    </div>
                                    <div class="col-4 mt-4 mx-auto"><button class="btn btn-primary w-100"
                                            type="submit">Submit</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section>
        <!-- <section> rquest a callback close ============================-->
        <!-- ============================================-->




        <div class="container">

            <!------------------------- high value addition start --------------------------------->
            <section>
                <div class="container my-5">
                    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                        <h2> High Value Addition</h2>

                    </div>
                    <div class="scalable-cloud" data-aos="fade-up" data-aos-duration="1500">
                        <div class="row my-3">
                            <div class="col-lg-3 col-12 d-flex justify-content-between">
                                <h5 class="text-color">Internal Team’s Chat</h5>
                                <div class="vr d-lg-block d-none"></div>
                            </div>
                            <div class="col-lg-9 col-12">Employees can chat internally using mobile app and web portal.</div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-3 col-12 d-flex justify-content-between">
                                <h5 class="text-color">Mobile Accessibility </h5>
                                <div class="vr d-lg-block d-none"></div>
                            </div>
                            <div class="col-lg-9 col-12">HRMS functions accessible via mobile app, notifications, approvals</div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-3 col-12 d-flex justify-content-between">
                                <h5 class="text-color">Calendar Integrations</h5>
                                <div class="vr d-lg-block d-none"></div>
                            </div>
                            <div class="col-lg-9 col-12">Outlook, google and other calendars integration to book meetings directly from the platform.</div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-3 col-12 d-flex justify-content-between">
                                <h5 class="text-color">AI based Interview Models</h5>
                                <div class="vr d-lg-block d-none"></div>
                            </div>
                            <div class="col-lg-9 col-12">Candidates record responses to pre-set questions. AI analyzes Answers, facial expressions, tone, and language. </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-3 col-12 d-flex justify-content-between">
                                <h5 class="text-color">Video Integrations</h5>
                                <div class="vr d-lg-block d-none"></div>
                            </div>
                            <div class="col-lg-9 col-12">Integrated multiple video calling platforms (Zoom, Teams, Meet) for interview and conferencing.</div>
                        </div>

                    </div>
                </div>
            </section>
            <!------------------------- high value addition end --------------------------------->




            <!------------------------------  things you know start ------------------------->
            <section class="my-5">
                <div class="text-center">
                    <h2 class="fs-2 fs-md-3">Things You Get</h2>
                    <hr class="short"
                        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                        data-zanim-trigger="scroll" />
                </div>

                <div>
                    <div class="row">
                        <div class="col-lg-5 mt-4">
                            <div class=" p-3 bg-primary">
                                <!-- <div class=" "> -->
                                <h3 class="mb-3 text-white"> Our Expertise</h3>
                                <p class="text-white">Working with our certified experts means you get tailored,
                                    high-quality solutions, delivered on time and within budget. We ensure seamless
                                    collaboration, leveraging industry-best practices to bring your vision to life with
                                    efficiency and reliability.
                                </p>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="h-100">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/Product_Consulting.svg') }}"
                                                    alt="product consulting" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Product Consulting</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/customized-solution.svg') }}"
                                                    alt="customized solution" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Customized Solution</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/scalable-solution.svg') }}"
                                                    alt="scalable solution" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Scalable Solution</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/user-friendly.svg') }}"
                                                    alt="user friendly" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>User-friendly Interface
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/data-security.svg') }}"
                                                    alt="data security" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Data Security</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/dedicated-support.svg') }}"
                                                    alt="dedicated support" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Dedicated Support</h5>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- <section> things you know close ============================-->


        </div><!-- end of .container-->

        </div>

        </div>

    </main>
@endsection
