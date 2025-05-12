@extends('afrontend/layout')
@section('page_title', 'Cloud')
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
                        <div class="bg-holder" style="background-image:url({{ asset('storage/media/1214549853.jpg') }});">
                        </div>
                        <!--/.bg-holder-->
                        <div class="container">
                            <div class="row min-vh-100 py-8 align-items-center justify-content-center"
                                data-inertia='{"weight":1.5}'>
                                <div class="col-sm-8 col-lg-8 px-5 px-sm-3"
                                    style="background-color: #ffffff88; padding:30px; border-radius: 10px;">
                                    <div class="overflow-hidden">
                                        <p class="fs-4 fs-md-5 lh-1 text-color" data-zanim-xs='{"delay":0}'
                                            style="font-size:4.2087269129rem !important; letter-spacing: -0.25rem;font-weight: 700;">
                                            Cloud Service </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color" data-zanim-xs='{"delay":0.1}'>
                                            Cloud services offer on-demand computing resources like storage, servers, databases, and applications over the internet, enabling scalability, flexibility, and cost-efficiency. </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3"
                                                href="{{ url('/about-us') }}">Read more<span
                                                    class="fas fa-chevron-right ms-2"></span></a><a
                                                class="btn btn-warning mt-3" href="{{ url('/contact-us') }}">Contact us<span
                                                    class="fas fa-chevron-right ms-2"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @foreach ($slider as $list)
      @endforeach --}}
                </div>
                <div class="swiper-nav">
                    <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
                    <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
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
                                    <img class="img-fluid" src="{{ asset('storage/media/' . $clogolist->image) }}"
                                        alt="partnerco" data-zanim-xs="{}" />
                                    {{--
        </div> --}}
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

            <!-------------------------- simplify cloud start ---------------->
                <section>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                    </div>
                    <div class="my-5">
                        <div class="row " data-aos="fade-up" data-aos-duration="1000">
                            <div class="col-lg-6">

                                <h3 > Simplifying the Cloud: Managed Services for Seamless Operations</h3>
                            </div>
                            <div class="col-lg-6">
                                <p> Our Managed Cloud Services are designed to eliminate the complexity of managing cloud infrastructure, allowing your business to focus on innovation and growth. We offer comprehensive support across all major cloud platforms—AWS, Azure, Google Cloud, and hybrid environments—tailored to your unique needs. From architecture design and migration to continuous monitoring, security management, and cost optimization, our team ensures your cloud environment runs efficiently and securely. With 24/7 technical support, proactive incident resolution, and expert guidance, we help reduce operational risks and enhance performance. Whether you’re just starting your cloud journey or scaling an enterprise environment, we provide the tools, expertise, and reliability to make cloud management effortless and effective.
                                </p>
                            </div>

                        </div>
                    </div>
                </section>
        <!--------------------------  simplify cloud end ---------------->

        <!---------------  cloud deployment model start --------------------->
        <section class="cloud">
            <div class="text-center">
                <h3> Cloud Deployment Model </h3>
                <p>Cloud deployment models include Public Cloud, Private Cloud, Hybrid Cloud and Community Cloud, offering varying levels of control, flexibility, and security to meet different business needs.</p>
            </div>


            <div class="my-5">
                <div class="swiper myCloudSwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <img src="{{asset('assets/inbox/public_cloud.png')}}" class="img-fluid">
                            </div>
                            <div class="col-lg-8 p-5">
                                <h5> Public Cloud </h5>
                                <p> Public Cloud is a cloud deployment model where services and resources are provided by third-party providers over the internet. These resources are shared across multiple organizations (multi-tenant) and include infrastructure, storage, and applications. Public clouds offer scalability, cost-effectiveness, and flexibility, as businesses only pay for the resources they use. Major providers include AWS, Microsoft Azure, and Google Cloud. While public clouds provide strong security measures, they offer less control compared to private clouds. Ideal for businesses seeking low upfront costs and easy scalability. </p>
                            </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                       <div class="row align-items-center">
                            <div class="col-lg-8 p-5">
                                <h5> Private Cloud </h5>
                                <p> Private Cloud is a cloud deployment model where cloud resources are used exclusively by a single organization, either on-premises or hosted by a third-party provider. It offers enhanced security, control, and customization compared to public clouds. Private clouds are ideal for businesses with strict compliance or security requirements, but they tend to have higher upfront costs. </p>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{asset('assets/inbox/private_cloud.png')}}" class="img-fluid">
                            </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <img src="{{asset('assets/inbox/hybrid_cloud.png')}}" class="img-fluid">
                            </div>
                            <div class="col-lg-8 p-5">
                                <h5> Hybrid Cloud </h5>
                                <p> Hybrid Cloud is a cloud deployment model that combines both private and public cloud infrastructures, allowing data and applications to be shared between them. This approach provides greater flexibility, enabling businesses to leverage the scalability of public clouds while maintaining control and security with private clouds for sensitive workloads. Hybrid cloud is ideal for organizations that need a mix of both environments for different tasks. </p>
                            </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="row align-items-center">
                            <div class="col-lg-8 p-5">
                                <h5> Community Cloud </h5>
                                <p> Community Cloud is a cloud deployment model shared by multiple organizations with common concerns, such as security, compliance, or industry-specific requirements. It can be hosted by a third-party provider or managed internally. Community clouds allow for cost-sharing and collaboration while maintaining control over sensitive data, making them ideal for businesses in the same industry or regulatory environment. </p>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{asset('assets/inbox/Multi_Cloud.png')}}" class="img-fluid">
                            </div>
                        </div>
                      </div>

                    </div>
                    {{-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> --}}
                  </div>
            </div>
        </section>
        <!---------------  cloud deployment model end --------------------->

        <!--------------------------------------- cloud services start --------------------------->

        <section class="cloud-services">
           <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
               <h3 > Our Cloud Managed Services </h3>
               <p> Our Cloud Managed Services provide end-to-end management, monitoring, security, and optimization of your cloud infrastructure, ensuring scalability, performance, compliance, and 24/7 expert support for seamless operations. </p>
           </div>

           <div class="my-5">
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-xl-3">
                    <div>
                        <div class=" nav flex-column nav-pills"  id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link border-bottom py-3 active" id="v-pills-cloudmigrate-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cloudmigrate" type="button" role="tab" aria-controls="v-pills-cloudmigrate" aria-selected="true"> Cloud Migration </a>

                            <a class="nav-link border-bottom py-3" id="v-pills-clouddeploy-tab" data-bs-toggle="pill" data-bs-target="#v-pills-clouddeploy" type="button" role="tab" aria-controls="v-pills-clouddeploy" aria-selected="false"> Cloud Deployment </a>

                            <a class="nav-link border-bottom py-3" id="v-pills-cloudoptimize-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cloudoptimize" type="button" role="tab" aria-controls="v-pills-cloudoptimize" aria-selected="false"> Cloud Optimization  </a>

                            <a class="nav-link border-bottom py-3" id="v-pills-monitor-tab" data-bs-toggle="pill" data-bs-target="#v-pills-monitor" type="button" role="tab" aria-controls="v-pills-monitor" aria-selected="false"> Monitoring and Maintenance </a>

                            <a class="nav-link border-bottom py-3" id="v-pills-appmanage-tab" data-bs-toggle="pill" data-bs-target="#v-pills-appmanage" type="button" role="tab" aria-controls="v-pills-appmanage" aria-selected="false"> Application Management Services </a>

                            <a class="nav-link border-bottom py-3" id="v-pills-inframanage-tab" data-bs-toggle="pill" data-bs-target="#v-pills-inframanage" type="button" role="tab" aria-controls="v-pills-inframanage" aria-selected="false"> Infrastructure Management  </a>

                            <a class="nav-link border-bottom py-3" id="v-pills-clouddb-tab" data-bs-toggle="pill" data-bs-target="#v-pills-clouddb" type="button" role="tab" aria-controls="v-pills-clouddb" aria-selected="false"> Managed Cloud Database </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 my-3 " >
                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane p-4 card fade show active" id="v-pills-cloudmigrate" role="tabpanel" aria-labelledby="v-pills-cloudmigrate-tab" tabindex="0">
                            <p> We offer comprehensive cloud migration solutions to help businesses move their data, apps, and infrastructure from legacy or other cloud systems to a modern, secure cloud environment—ensuring minimal downtime and seamless transition. </p>
                            <p> Our 5 Phase Approach: </p>
                                <ul>
                                    <li> <strong> Assessment & Planning: </strong> Analyze existing infrastructure, identify cloud-suitable workloads, and create a tailored migration roadmap.
                                    </li>
                                    <li> <strong> Cloud Strategy & Architecture: </strong> Choose the right cloud model (public, private, hybrid), design secure architectures, and select the best migration strategy (Rehost, Replatform, Refactor, etc.).

                                    </li>
                                    <li> <strong> Migration Execution: </strong> Migrate data and apps with minimal disruption, apply automation and DevOps, and validate post-migration performance.


                                    </li>
                                    <li> <strong> Security & Compliance: </strong> Apply encryption, access control, and ensure compliance with standards like ISO, GDPR, HIPAA.

                                    </li>
                                    <li> <strong> Optimization & Support: </strong> Monitor performance, optimize costs, enable auto-scaling, and provide ongoing support and disaster recovery.

                                    </li>
                                </ul>

                        </div>
                        <div class="tab-pane p-4 card fade" id="v-pills-clouddeploy" role="tabpanel" aria-labelledby="v-pills-clouddeploy-tab" tabindex="0">
                            <p>Inbox offers expert cloud deployment solutions to help businesses set up secure, scalable, and high-performing cloud environments tailored to their goals—whether starting fresh or expanding existing infrastructure.</p>
                            <p> Key Offering: </p>
                            <ul>
                                <li> <strong> Deployment Strategy & Planning: </strong> Align cloud deployment with business goals, choose the right model (Public, Private, Hybrid, Multi-cloud), and create a custom roadmap.

                                </li>
                                <li> <strong>  Cloud Environment Setup: </strong>Provision cloud infrastructure, configure native tools (AWS, Azure, GCP), and integrate with DevOps pipelines.

                                </li>
                                <li> <strong> Application & Service Deployment: </strong> Deploy apps, databases, containers (Docker, Kubernetes) with auto-scaling, load balancing, and seamless CI/CD.

                                </li>
                                <li> <strong> Security & Compliance Integration: </strong> Implement IAM, encryption, firewalls, and ensure regulatory compliance (e.g., GDPR, HIPAA, ISO 27001).

                                </li>
                                <li> <strong> Monitoring & Optimization: </strong> Set up monitoring tools, optimize performance and costs, and provide actionable reports for continuous enhancement.

                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane p-4 card fade" id="v-pills-cloudoptimize" role="tabpanel" aria-labelledby="v-pills-cloudoptimize-tab" tabindex="0">
                           <p> Inbox helps businesses maximize cloud performance, reduce costs, and streamline operations by identifying inefficiencies and aligning usage with business goals.</p>
                           <p>  Key Optimization Areas: </p>
                           <ul>
                            <li> <strong>  Assessment & Discovery:  </strong> Conduct a detailed audit to find underused, over-provisioned, or idle resources and analyze billing and usage data.

                            </li>
                            <li> <strong> Cost Optimization: </strong> Rightsize resources, recommend reserved or spot instances, and uncover savings across cloud platforms (AWS, Azure, GCP).

                            </li>
                            <li> <strong> Performance Tuning: </strong> Enhance workload speed, response times, and application/database performance for better reliability.

                            </li>
                            <li> <strong> Architecture Review: </strong> Evaluate and refactor architecture for scalability, maintainability, and alignment with best practices.
                                </li>
                            <li> <strong>  Security & Compliance Optimization:  </strong> Improve security configurations, enforce least-privilege access, and meet compliance standards.
                             </li>
                            <li> <strong> Monitoring & Automation: </strong> Implement proactive monitoring, automate scaling and backups, and adopt AIOps/FinOps for ongoing optimization.
                            </li>
                           </ul>
                        </div>
                        <div class="tab-pane p-4 card fade" id="v-pills-monitor" role="tabpanel" aria-labelledby="v-pills-monitor-tab" tabindex="0">
                            <p> Inbox ensures your cloud infrastructure stays healthy, secure, and high-performing through 24/7 monitoring, real-time alerting, and proactive maintenance.</p>
                            <p> Key Service Areas: </p>
                            <ul>
                                <li> <strong> 24/7 Cloud Monitoring: </strong> Real-time tracking of cloud resources with instant alerts for downtime, performance issues, and threats.

                                </li>
                                <li> <strong> Infrastructure Health Checks: </strong> Regular diagnostics to detect bottlenecks and predict potential failures using analytics.

                                </li>
                                <li> <strong> Patch Management & Updates: </strong>   Scheduled security updates and version control to minimize disruptions.
                                     </li>
                                <li> <strong> Security Monitoring:  </strong> Continuous threat detection, log analysis, and compliance auditing (ISO, HIPAA, GDPR, etc.).

                                </li>
                                <li> <strong> Backup & Recovery Management: </strong> Routine backups, disaster recovery drills, and data integrity assurance.

                                 </li>
                                <li> <strong> Performance Optimization: </strong> Resource tuning, scaling recommendations, and APM tool integration for better performance.</li>
                                <li> <strong> Reporting & Analytics: </strong> Custom dashboards, health reports, and expert insights shared through regular reviews. </li>
                            </ul>
                        </div>
                        <div class="tab-pane p-4 card fade" id="v-pills-appmanage" role="tabpanel" aria-labelledby="v-pills-appmanage-tab" tabindex="0">
                          <p>  Inbox delivers full lifecycle management for cloud, on-premises, and hybrid applications—enhancing performance, reducing downtime, and ensuring a seamless user experience. </p>
                          <p>  Key Service Areas: </p>
                          <ul>
                            <li> <strong> Application Monitoring & Support: </strong>  24/7 performance monitoring, incident resolution, and user support integration.

                            </li>
                            <li> <strong> Performance Optimization:  </strong> Improve speed and reliability through tuning, load balancing, caching, and analytics-based recommendations.<li>
                            <li> <strong> Application Updates & Maintenance: </strong>  Regular patches, upgrades, and compatibility testing with minimal business disruption.
                                 </li>
                            <li> <strong> Security & Compliance Management: </strong> Application security scanning, role-based access, encryption, and adherence to GDPR, HIPAA, PCI-DSS. </li>
                            <li> <strong>  Application Lifecycle Management: </strong> End-to-end support from development to retirement, including CI/CD integration and documentation. </li>
                            <li> <strong> Backup & Disaster Recovery: </strong> Routine backups, failover strategies, and business continuity planning. </li>

                        </ul>
                        </div>
                        <div class="tab-pane p-4 card fade" id="v-pills-inframanage" role="tabpanel" aria-labelledby="v-pills-inframanage-tab" tabindex="0">
                          <p> Inbox delivers proactive, end-to-end management of cloud and on-premises infrastructure to ensure stability, security, scalability, and high performance across your IT environment. </p>
                          <p> Core Capabilities: </p>
                          <ul>
                            <li> <strong> Server & Network Management: </strong> Manage servers and networks with optimization, traffic control, firewall, and VPN configurations.

                            </li>
                            <li> <strong> Cloud Infrastructure Management: </strong> Full lifecycle support across AWS, Azure, GCP, with multi-cloud orchestration and auto-scaling.

                            </li>
                            <li> <strong> Storage & Backup Management: </strong> Scalable storage design, automated backups, and tiered storage strategies for cost-effective performance. </li>
                            <li> <strong> Security & Compliance Oversight: </strong> Real-time security monitoring, vulnerability management, and compliance enforcement (ISO, NIST, HIPAA, GDPR). </li>
                            <li> <strong>  Monitoring & Alerting:  </strong> Real-time alerts for failures and anomalies, integrated with ITSM and incident response systems.

                            </li>
                            <li> <strong> Infrastructure Automation:  </strong> Use of IaC tools (Terraform, Ansible) for faster, error-free provisioning, patching, and scaling. </li>
                          </ul>
                        </div>
                        <div class="tab-pane p-4 card fade" id="v-pills-clouddb" role="tabpanel" aria-labelledby="v-pills-clouddb-tab" tabindex="0">
                            <p> Inbox provides end-to-end management of cloud databases—ensuring high availability, security, and optimal performance so your team can focus on innovation, not maintenance. </p>
                            <p> Key Service Areas: </p>
                            <ul>
                                <li> <strong> Database Provisioning & Configuration: </strong> Setup and customize databases (e.g., RDS, Azure SQL, MongoDB, PostgreSQL) for performance, security, and storage needs. </li>
                                <li> <strong> Performance Monitoring & Tuning: </strong> 24/7 monitoring with query optimization, indexing, and real-time analytics for peak efficiency. </li>
                                <li> <strong> Automated Backups & Disaster Recovery: </strong> Scheduled backups, point-in-time recovery, HA setups, and multi-region replication for business continuity. </li>
                                <li> <strong>  Security & Compliance: </strong>Encryption, RBAC, firewall policies, and adherence to HIPAA, PCI-DSS, GDPR, SOC 2 standards.

                                </li>
                                <li> <strong> Scaling & High Availability: </strong> On-demand scaling, load balancing, failover, and support for clustering and read replicas.
                                </li>
                                <li> <strong> Patching & Maintenance: </strong> Routine patching, upgrades, and minimal-downtime maintenance aligned with business hours.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        </section>

        <!--------------------------------------- cloud services end --------------------------->

          <!------------------------ cloud partners start ------------------------->

          <section class="iot-process">
            <div class="text-center">
                <h3> Our Cloud Partners  </h3>
            </div>
           <div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 3% auto;">
                            <img src="{{ asset('assets/inbox/AWS.png') }}" class="img-fluid">
                        </div>
                        <p class="fw-medium"> AWS </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 3% auto;">
                            <img src="{{ asset('assets/inbox/google-cloud.png') }}"
                                class="img-fluid">
                        </div>
                        <p class="fw-medium"> Google Cloud </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 3% auto;">
                            <img src="{{ asset('assets/inbox/azure-1.png') }}" class="img-fluid">
                        </div>
                        <p class="fw-medium"> Azure </p>
                    </div>
                </div>
                 <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 3% auto;">
                            <img src="{{ asset('assets/inbox/cloudflare.png') }}" class="img-fluid">
                        </div>
                        <p class="fw-medium"> Cloudflare </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 3% auto;">
                            <img src="{{ asset('assets/inbox/Docker.png') }}"
                                class="img-fluid">
                        </div>
                        <p class="fw-medium"> Docker </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 3% auto;">
                            <img src="{{ asset('assets/inbox/Kubernetes.png') }}"
                                class="img-fluid">
                        </div>
                        <p class="fw-medium"> Kubernetes </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 3% auto;">
                            <img src="{{ asset('assets/inbox/Jenkins.png') }}"
                                class="img-fluid">
                        </div>
                        <p class="fw-medium"> Jenkins </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 3% auto;">
                            <img src="{{ asset('assets/inbox/Terraform.png') }}"
                                class="img-fluid">
                        </div>
                        <p class="fw-medium"> Terraform </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 3% auto;">
                            <img src="{{ asset('assets/inbox/oracle.png') }}"
                                class="img-fluid">
                        </div>
                        <p class="fw-medium"> Oracle </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 3% auto;">
                            <img src="{{ asset('assets/inbox/CloudFormation.png') }}"
                                class="img-fluid">
                        </div>
                        <p class="fw-medium"> CloudFormation </p>
                    </div>
                </div>
            </div>
           </div>
          </section>

          <!------------------------ cloud partners end ------------------------->

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




         <!------------------------------  things you know start ------------------------->
         <section class="my-5">
            <div class="container">
                <div class="text-center">
                    <h3 class="fs-2 fs-md-3">Things You Get</h3>
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
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
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
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
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
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
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
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>User-friendly Interface</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/data-security.svg') }}"
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
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
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
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

            </div><!-- end of .container-->
        </section>
        <!-- <section> things you know close ============================-->

        </div>

        </div>

    </main>
@endsection
