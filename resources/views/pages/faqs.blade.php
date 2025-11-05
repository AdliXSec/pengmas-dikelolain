@extends('layouts.sidebar')

@section('title', 'Rovex - Design Agency Home')

@section('page-header')
    <x-page-header title="FAQs<span></span>">
        <li class="breadcrumb-item active" aria-current="page">FAQs</li>
    </x-page-header>
@endsection

@section('page-wrapper-class', 'page-faqs')
@section('sidebar')
                    <div class="faq-sidebar">
                        <!-- Faq Category List Start -->
                        <div class="faq-catagery-list wow fadeInUp">
                            <ul>
                                <li><a href="#general_information">general information FAQs</a></li>
                                <li><a href="#technical_and_design">technical and design FAQs</a></li>
                                <li><a href="#project_management">project management FAQs</a></li>
                                <li><a href="#client_support">client support FAQs</a></li>
                            </ul>
                        </div>
                        <!-- Faq Category List End -->

                        <!-- Sidebar Cta Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-sidebar-cta.svg" alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- CTA Contact Content Start -->
                            <div class="cta-contact-content">
                                <p>We always available to discus with you</p>
                                <h3>info@domainname.com</h3>
                            </div>
                            <!-- CTA Contact Content End -->

                            <!-- CTA Contact Button Start -->
                            <div class="cta-contact-btn">
                                <a href="{{ route('contact') }}" class="btn-default">contact now</a>
                            </div>
                            <!-- CTA Contact Button End -->
                        </div>
                        <!-- Sidebar Cta Box End -->
                    </div>
                    <!-- Faq Sidebar End -->
                @endsection

                @section('main-content')
                    <!-- Page Faqs Catagery Start -->
                    <div class="page-faqs-catagery">
                        <!-- FAQs section start -->
                        <div class="page-faq-accordion" id="general_information">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">General information FAQs</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            What services does your agency provide?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We specialize in including graphic design, branding, website design and development, UX/UI design, social media marketing, digital advertising, video production, and content creation.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            Who are your typical clients?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We work with businesses of all sizes, from startups and small businesses to large enterprises. Our clients span industries such as technology, retail, hospitality, healthcare, and more.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            How long does a typical project take?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>The timeline depends on the scope and complexity of the project. Smaller projects may take 2-4 weeks, while larger ones can take several months. We'll provide an estimated timeline after discussing your needs.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            What is your pricing structure?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We offer customized pricing based on the specific requirements of each project. After our initial consultation, we'll provide a detailed proposal with a breakdown of costs.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                            Why are UX and UI important?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>User Experience (UX) design focuses on enhancing the overall experience users have when interacting with a product or service. It involves researching user needs, creating user personas, designing user journeys, and testing how easy or efficient the product is to use.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="page-faq-accordion" id="technical_and_design">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Technical and design FAQs</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion1">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading6">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                            What file formats do you provide for final designs?
                                        </button>
                                    </h2>
                                    <div id="collapse6" class="accordion-collapse collapse show" aria-labelledby="heading6" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>We deliver designs in a variety of formats depending on your needs, including vector files like AI, EPS, PDF, and web-friendly formats like PNG, JPEG, and SVG. For animations or videos, formats like MP4 or GIF are also provided.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading7">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                            Are your designs responsive and mobile-friendly?
                                        </button>
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Absolutely! All of our web designs are fully responsive, ensuring they look and function seamlessly across devices, including desktops, tablets, and smartphones.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="page-faq-accordion" id="project_management">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Project management FAQs</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion2">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading8">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                            How do you manage projects to ensure timely delivery?
                                        </button>
                                    </h2>
                                    <div id="collapse8" class="accordion-collapse collapse show" aria-labelledby="heading8" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>We use professional project management tools like Asana, Trello, Monday.com, or ClickUp to create timelines, assign tasks, and track progress. Clear milestones and regular updates help us stay on schedule.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading9">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                            How will I be involved in the project?
                                        </button>
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>We value your input throughout the project. You'll be involved during key stages, such as the initial briefing, concept presentation, and revision rounds. We schedule regular check-ins to gather your feedback and ensure alignment.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading10">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                            Who will be my main point of contact?
                                        </button>
                                    </h2>
                                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>You will have a dedicated project manager who will serve as your primary point of contact. They will keep you updated, address concerns, and coordinate with our team on your behalf.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="page-faq-accordion" id="client_support">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Client support FAQs</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion3">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading11">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                            Do you offer ongoing support after the project is completed?
                                        </button>
                                    </h2>
                                    <div id="collapse11" class="accordion-collapse collapse show" aria-labelledby="heading11" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>Yes, we provide ongoing support for services such as website maintenance, updates, design tweaks, and marketing campaigns. Our support packages can be customized based on your specific needs.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading12">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                            How do I contact your support team?
                                        </button>
                                    </h2>
                                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>You can reach our support team via email, phone, or our support portal. For urgent issues, we recommend contacting us by phone or marking your email as high priority.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp"  data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading13">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
                                            What is your response time for support inquiries?
                                        </button>
                                    </h2>
                                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>We strive to respond to all inquiries within 24-48 hours. For clients with a support agreement, response times may be faster depending on the service level agreement (SLA).</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->
                    </div>
                    <!-- Page Faqs Catagery End -->
            </div>
        </div>
    </div>

@endsection

@push('scripts')
@endpush
