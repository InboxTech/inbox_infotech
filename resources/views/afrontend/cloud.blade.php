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
                    <div class=" sticky-top" style="top: 100px; bottom: 100px; z-index: 0;">
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
                            <p> Seamlessly transition your business to the cloud with our end-to-end Cloud Migration Services. We help you move your data, applications, and infrastructure from legacy systems or other cloud platforms to a modern, secure cloud environment—minimizing downtime and ensuring business continuity.

                                Our expert team assesses your current infrastructure, designs a tailored migration strategy, and executes the move using industry best practices. Whether you're looking to rehost, re-platform, or refactor, we ensure a smooth and secure migration experience with minimal disruption. Post-migration, we optimize your cloud setup for performance, scalability, and cost efficiency. </p>
                                <p> Our Cloud Migration Approach </p>
                                <ul>
                                    <li> Assessment & Planning
                                      <ul>
                                         <li> We begin with a full assessment of your existing IT environment. </li>
                                         <li> Identify workloads suitable for cloud, evaluate dependencies, risks, and compliance needs. </li>
                                         <li> Develop a tailored migration roadmap aligned with your business objectives.</li>
                                    </ul>
                                    </li>
                                    <li> Cloud Strategy & Architecture
                                      <ul>
                                        <li>Choose the right cloud model (public, private, hybrid, or multi-cloud).</li>
                                        <li>Design scalable, secure, and cost-efficient cloud architectures.</li>
                                        <li>Select the appropriate migration strategy: Rehost, Replatform, Refactor, Repurchase, or Retire.</li>
                                      </ul>
                                    </li>
                                    <li> Migration Execution

                                        <ul>
                                            <li> Perform data and application migration with minimal downtime.</li>
                                            <li> Automate workflows and integrate DevOps practices.</li>
                                            <li> Validate workloads post-migration to ensure performance and functionality.</li>
                                        </ul>
                                    </li>
                                    <li> Security & Compliance
                                       <ul>
                                        <li>Implement end-to-end encryption, access controls, and compliance frameworks. </li>
                                        <li> Ensure adherence to standards like ISO, GDPR, HIPAA, and others.</li>
                                       </ul>
                                    </li>
                                    <li> Optimization & Support
                                        <ul>
                                            <li> Continuously monitor cloud performance and resource utilization.</li>
                                            <li> Offer cost optimization, governance, and post-migration support. </li>
                                            <li> Enable auto-scaling, backup, and disaster recovery mechanisms. </li>
                                        </ul>
                                    </li>
                                </ul>

                        </div>
                        <div class="tab-pane p-4 card fade" id="v-pills-clouddeploy" role="tabpanel" aria-labelledby="v-pills-clouddeploy-tab" tabindex="0">
                            <p>Accelerate your digital transformation with our expert Cloud Deployment Services, designed to deliver secure, scalable, and high-performance cloud environments tailored to your business needs. At Inbox, we ensure a smooth and efficient deployment process—whether you're adopting a new cloud infrastructure or expanding existing services.</p>
                            <p> What We Offer </p>
                            <ul>
                                <li> Deployment Strategy & Planning
                                    <ul>
                                        <li> Evaluate your business goals, application architecture, and compliance requirements. </li>
                                        <li> Choose the best deployment model: Public, Private, Hybrid, or Multi-cloud. </li>
                                        <li> Define workload priorities and develop a customized deployment roadmap.</li>
                                    </ul>
                                </li>
                                <li> Cloud Environment Setup
                                    <ul>
                                       <li> Provisioning of cloud infrastructure (compute, storage, networking). </li>
                                       <li> Configuration of cloud-native tools and services (e.g., AWS EC2, Azure Virtual Machines, GCP Compute Engine). </li>
                                       <li> Integration with DevOps pipelines for continuous delivery. </li>
                                    </ul>
                                </li>
                                <li>Application & Service Deployment
                                    <ul>
                                        <li>Deploy web apps, APIs, databases, containers (Docker, Kubernetes), and more.</li>
                                        <li> Enable auto-scaling, load balancing, and high availability. </li>
                                        <li> Ensure seamless CI/CD processes for ongoing releases. </li>
                                    </ul>
                                </li>
                                <li>Security & Compliance Integration
                                    <ul>
                                        <li> Implement firewalls, IAM policies, encryption, and secure access controls. </li>
                                        <li> Align deployments with industry standards and regulations (e.g., GDPR, HIPAA, ISO 27001).</li>
                                    </ul>
                                </li>
                                <li> Monitoring & Optimization
                                    <ul>
                                        <li> Configure monitoring tools for real-time visibility and alerting. </li>
                                        <li> Analyze resource utilization and optimize for cost and performance. </li>
                                        <li> Provide regular reporting and insights for continuous improvement. </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane p-4 card fade" id="v-pills-cloudoptimize" role="tabpanel" aria-labelledby="v-pills-cloudoptimize-tab" tabindex="0">
                           <p> Maximize the performance, efficiency, and cost-effectiveness of your cloud environment with our expert Cloud Optimization Services. At Inbox, we help businesses streamline their cloud operations by identifying and eliminating inefficiencies, reducing waste, and aligning cloud usage with business objectives. </p>
                           <p>  Our Cloud Optimization Process: </p>
                           <ul>
                            <li> Assessment & Discovery
                                <ul>
                                 <li>In-depth audit of your current cloud environment</li>
                                 <li>Identify underused, over-provisioned, or idle resources</li>
                                 <li>Analyze billing data and usage patterns </li>
                                </ul>
                            </li>
                            <li> Cost Optimization
                                    <ul>
                                        <li>Rightsize compute and storage resources</li>
                                        <li> Recommend reserved instances, spot instances, and auto-scaling </li>
                                        <li> Identify cost-saving opportunities across services (e.g., AWS, Azure, GCP) </li>
                                    </ul>
                            </li>
                            <li>
                                Performance Tuning
                                <ul>
                                    <li> Optimize workloads for speed and reliability </li>
                                    <li> Improve response times and throughput</li>
                                    <li> Enhance application and database performance</li>
                                </ul>
                            </li>
                            <li> Architecture Review
                                <ul>
                                  <li>Evaluate your architecture against cloud best practices</li>
                                  <li>Refactor or rearchitect for better scalability and maintainability</li>
                                  <li>Apply Well-Architected Frameworks and cloud-native design principles</li>
                                </ul> </li>
                            <li>Security & Compliance Optimization
                                <ul>
                                 <li> Close security gaps and reduce unnecessary exposure </li>
                                 <li> Implement least-privilege access and secure configurations </li>
                                 <li>Ensure alignment with compliance requirements</li>
                                </ul>
                             </li>
                            <li>Monitoring & Automation
                              <ul>
                              <li> Set up proactive monitoring, alerts, and dashboards</li>
                              <li> Automate scaling, backups, and resource scheduling</li>
                              <li>Enable continuous optimization with AIOps and FinOps practices</li>
                            </ul>
                            </li>
                           </ul>
                        </div>
                        <div class="tab-pane p-4 card fade" id="v-pills-monitor" role="tabpanel" aria-labelledby="v-pills-monitor-tab" tabindex="0">
                            <p> Ensure the health, performance, and security of your cloud infrastructure with our comprehensive Monitoring and Maintenance Services. At Inbox, we provide 24/7 proactive monitoring, real-time alerting, and regular maintenance to keep your cloud environment running smoothly and efficiently.</p>
                            <p> What We Do </p>
                            <ul>
                                <li>24/7 Cloud Monitoring
                                  <ul>
                                    <li> Continuous monitoring of cloud resources, applications, and services</li>
                                    <li>Real-time performance tracking and anomaly detection</li>
                                    <li>Instant alerts for issues such as downtime, performance degradation, or security risks</li>
                                </ul>
                                </li>
                                <li>Infrastructure Health Checks
                                  <ul>
                                    <li> Regular system diagnostics to assess CPU, memory, disk usage, and network activity</li>
                                    <li> Detection of resource bottlenecks or failures</li>
                                    <li>Predictive analytics to prevent future incidents</li>
                                </ul>
                                </li>
                                <li>Patch Management & Updates
                                    <ul>
                                       <li> Scheduled updates and security patching for operating systems, databases, and applications</li>
                                       <li> Version control and rollback planning to minimize service disruption</li>
                                    </ul> </li>
                                <li> Security Monitoring
                                  <ul>
                                   <li> Continuous threat detection, log analysis, and intrusion prevention</li>
                                   <li> Integration with SIEM tools and incident response systems </li>
                                   <li> Compliance audits for standards like ISO, HIPAA, GDPR, etc. </li>
                                </ul>
                                </li>
                                <li> Backup & Recovery Management
                                    <ul>
                                        <li>Routine backup verification and validation</li>
                                        <li> Recovery testing and planning to ensure data integrity </li>
                                        <li> Disaster recovery drills and failover setup </li>
                                    </ul>
                                 </li>
                                <li> Performance Optimization
                                    <ul>
                                        <li>Regular tuning of resources based on usage patterns</li>
                                        <li> Recommendations for scaling, resource allocation, and cost control </li>
                                        <li>Application performance management (APM) integration</li>
                                    </ul>
                                </li>
                                <li> Reporting & Analytics
                                    <ul>
                                        <li>Detailed reports on uptime, usage, incidents, and system health</li>
                                        <li> Custom dashboards tailored to your business KPIs</li>
                                        <li>Monthly or quarterly review meetings with expert recommendations</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane p-4 card fade" id="v-pills-appmanage" role="tabpanel" aria-labelledby="v-pills-appmanage-tab" tabindex="0">
                          <p>  Optimize performance, reduce downtime, and improve user experience with our end-to-end Application Management Services. At Inbox, we take full responsibility for the lifecycle management of your business-critical applications—whether hosted on the cloud, on-premises, or in hybrid environments. </p>
                          <p>  What We Offer</p>
                          <ul>
                            <li>Application Monitoring & Support
                              <ul>
                                <li> 24/7 monitoring of application performance and availability</li>
                                <li>Real-time issue detection and incident resolution</li>
                                <li>User support and helpdesk integration</li>
                            </ul>
                            </li>
                            <li>Performance Optimization
                              <ul>
                                <li>Tuning applications for speed, responsiveness, and reliability</li>
                                <li> Load balancing, caching, and database optimization</li>
                                <li>Proactive recommendations based on usage analytics</li>
                            </ul>
                            </li>
                            <li>Application Updates & Maintenance
                                <ul>
                                   <li> Regular patching, bug fixes, and version upgrades</li>
                                   <li> Compatibility testing and rollback management </li>
                                   <li> Maintenance windows aligned with your business hours </li>
                                </ul> </li>
                            <li> Security & Compliance Management
                              <ul>
                               <li> Application vulnerability scanning and threat detection</li>
                               <li> Role-based access control, encryption, and data privacy compliance </li>
                               <li> Alignment with industry standards such as GDPR, HIPAA, and PCI-DSS </li>
                            </ul>
                            </li>
                            <li> Application Lifecycle Management
                                <ul>
                                    <li>Support from development and deployment to retirement</li>
                                    <li> Integration with DevOps/CI-CD pipelines</li>
                                    <li> Documentation, configuration management, and continuous improvement</li>
                                </ul>
                             </li>
                            <li> Backup & Disaster Recovery
                                <ul>
                                    <li>Scheduled backups and recovery testing</li>
                                    <li> Application-level failover strategies </li>
                                    <li>Business continuity planning and execution/li>
                                </ul>
                            </li>

                        </ul>
                        </div>
                        <div class="tab-pane p-4 card fade" id="v-pills-inframanage" role="tabpanel" aria-labelledby="v-pills-inframanage-tab" tabindex="0">
                          <p> Ensure stability, scalability, and performance of your IT backbone with our comprehensive Infrastructure Management Services. At Inbox, we take a proactive, end-to-end approach to managing your cloud and on-premises infrastructure—allowing your business to operate efficiently, securely, and without interruption. </p>
                          <p> Our Core Infrastructure Management Capabilities</p>
                          <ul>
                            <li> Server & Network Management
                                <ul>
                                    <li>Provisioning, monitoring, and maintenance of cloud and hybrid servers</li>
                                    <li>Network performance optimization, bandwidth usage analysis, and traffic management</li>
                                    <li>Configuration and management of firewalls, VPNs, and routing systems</li>
                                </ul>
                            </li>
                            <li>
                                Cloud Infrastructure Management
                                <ul>
                                    <li>Full lifecycle management on AWS, Azure, GCP, and hybrid environments</li>
                                    <li>Auto-scaling, load balancing, and resource optimization</li>
                                    <li>Multi-cloud orchestration and governance</li>
                                </ul>
                            </li>
                            <li>
                                Storage & Backup Management
                                <ul>
                                    <li> Design and administration of secure, scalable storage solutions</li>
                                    <li>Backup scheduling, snapshot management, and data recovery services</li>
                                    <li>Tiered storage strategy for cost and performance balance</li>
                                </ul>
                            </li>
                            <li>Security & Compliance Oversight
                                <ul>
                                    <li>Continuous security posture monitoring and threat prevention</li>
                                    <li>Access control, vulnerability management, and audit readiness</li>
                                    <li>Compliance enforcement for standards like ISO, NIST, HIPAA, and GDPR</li>
                                </ul>
                            </li>
                            <li>Monitoring & Alerting
                                <ul>
                                    <li>Real-time infrastructure monitoring and performance tracking</li>
                                    <li>Custom alerting systems for hardware failures, capacity issues, and anomalies</li>
                                    <li>Integration with ITSM and incident response systems</li>
                                </ul>
                            </li>
                            <li>Infrastructure Automation
                               <ul>
                                <li>Deployment of Infrastructure as Code (IaC) using Terraform, Ansible, or CloudFormation</li>
                                <li> Automated patching, scaling, and provisioning</li>
                                <li>Reduced manual errors and faster turnaround times</li>
                               </ul>


                            </li>
                          </ul>
                        </div>
                        <div class="tab-pane p-4 card fade" id="v-pills-clouddb" role="tabpanel" aria-labelledby="v-pills-clouddb-tab" tabindex="0">
                            <p> Ensure high availability, security, and performance of your databases with our fully Managed Cloud Database Services. At Inbox, we manage, monitor, and optimize your cloud-based databases so your teams can focus on innovation—without worrying about downtime, maintenance, or scaling challenges.</p>
                            <p> What We Offer: </p>
                            <ul>
                                <li>Database Provisioning & Configuration
                                    <ul>
                                        <li>Setup and configuration of cloud-native databases (e.g., Amazon RDS, Azure SQL, Google Cloud SQL)</li>
                                        <li>Support for relational and NoSQL databases including MySQL, PostgreSQL, MongoDB, Oracle, SQL Server, DynamoDB, and more</li>
                                        <li>Custom configuration based on performance, storage, and security requirements</li>
                                    </ul>
                                </li>
                                <li>Performance Monitoring & Tuning
                                    <ul>
                                        <li>24/7 monitoring of query performance, CPU usage, memory, and I/O metrics</li>
                                        <li>Query optimization, indexing strategies, and schema tuning</li>
                                        <li>Real-time analytics and performance dashboards</li>

                                    </ul>
                                </li>
                                <li>Automated Backups & Disaster Recovery
                                    <ul>
                                        <li>Scheduled, incremental backups with point-in-time recovery</li>
                                        <li>High-availability (HA) and multi-region replication</li>
                                        <li>Disaster recovery planning and testing for business continuity</li>
                                    </ul>
                                </li>
                                <li>Security & Compliance
                                   <ul>
                                    <li>Data encryption at rest and in transit</li>
                                    <li>Role-based access control (RBAC), firewall rules, and audit logging</li>
                                    <li>Compliance with standards such as HIPAA, PCI-DSS, GDPR, and SOC 2</li>

                                   </ul>


                                </li>
                                <li>Scaling & High Availability
                                    <ul>
                                        <li>Horizontal and vertical scaling to meet workload demands</li>
                                        <li>Load balancing and failover setup for uninterrupted access</li>
                                        <li>Support for read replicas and clustering </li>
                                    </ul>
                                </li>
                                <li>Patching & Maintenance
                                    <ul>
                                        <li>Regular updates and security patching with zero/minimal downtime</li>
                                        <li>Version upgrades and rollback strategies</li>
                                        <li>Maintenance windows aligned with business hours</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        </section>

        <!--------------------------------------- cloud services end --------------------------->

          <!------------------------ iot development process start ------------------------->

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
            </div>
           </div>
          </section>

          <!------------------------ iot development process end ------------------------->

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
                                                <img src="{{ asset('assets/img/icons/svg_icons/Creative_Support.svg') }}"
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Creative Support</h5>
                                            </div>
                                            <!-- <div class="">
            <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We transform brands, grow businesses, and tell brand and product stories in a most creative way.</p>
            </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/Creating_Experiences.svg') }}"
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Creating Experiences
                                                </h5>
                                            </div>
                                            <!-- <div class="">
            <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We cover a large range of creative platforms and digital projects with one purpose: to create experiences.</p>
            </div> -->
                                        </div>
                                    </div>
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
                                            <!-- <div class="">
            <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We guide you through the pipelines that generate new products with higher potential and lower risk.</p>
            </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/Business_Boosting.svg') }}"
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Business Boosting</h5>
                                            </div>
                                            <!-- <div class="">
            <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We provide energy-efficient and environmentally conservative solutions to our clients to boost their business.</p>
            </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/Strategic_Approach.svg') }}"
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Strategic Approach</h5>
                                            </div>
                                            <!-- <div class="">
            <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Based on solid strategic framework and real, relevant research, we create prototypes, not presentations.</p>
            </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/Logistic_Consulting.svg') }}"
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Logistic Consulting
                                                </h5>
                                            </div>
                                            <!-- <div class="">
            <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We work buy side and sell side to give our clients hard hitting answers and focus hard on best opportunities.</p>
            </div> -->
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- end of .container-->
        </section>
        <!-- <section> things you know close ============================-->
        </div>

        </div>

    </main>
@endsection
