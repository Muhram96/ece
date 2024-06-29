<style>
    .popup-form {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
    }

    .form-container {
        background-color: white;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 400px;
        position: relative;
    }

    .close-btn {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        margin-top:-10px;
    }

    .close-btn:hover,
    .close-btn:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    .form-container {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    .form-container h2 {
        text-align: center;
    }

    .form-container label {
        display: block;
        margin-bottom: 5px;
    }

    .form-container input {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .form-container button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .form-container button:hover {
        background-color: #0056b3;
    }
</style>
<main class="">
    <!-- hero section -->
    <section
        id="hero-img"
        class="flex items-center justify-around px-5 lg:px-0 h-[70vh]  md:h-auto"
    >
        <div></div>
        <div class="text-blue-800 space-y-4">
            <h1 class="text-xl font-semibold">
                M.Tech. <br />
                <span> Microelectronics </span>
            </h1>
            <p class="text-sm font-normal">
                Admission Open. Last date to apply is June 17, 2024.
            </p>
            <div class="flex flex-col md:flex-row items-center gap-4 pt-8">
                <button
                    class="border boder-amber-400 text-white bg-[#000080] text-white p-4 w-full md:w-auto"
                >
                    Download brochure
                </button>
                <button
                    class="border boder-yellow-600 text-white bg-[#000080] text-white p-4 w-full md:w-auto"
                >
                    Apply Now
                </button>
            </div>
        </div>
    </section>
    <div class="bg-[#8898EA] mb-10 py-4">
        <marquee
            class="text-white text-sm font-normal"
            behavior="scroll"
            direction="left"
            scrolldelay="50"
            truespeed="120"
            scrollamount="4"
        >
            <span class="text-lg font-semibold text-yellow-400 capitalize">
             &#9733;
          </span>
          <span class="text-lg font-semibold text-black capitalize">
             list of short list candidates.
          </span>
            <span class="text-lg font-semibold text-yellow-400 capitalize">
             &#9733;
          </span>
            <span class="text-lg font-semibold text-black capitalize">
            Top-up Fellowships for start-up personnel based on merit.
          </span>
            <span class="text-lg font-semibold text-yellow-400 capitalize">
             &#9733;
          </span>
            <span class="text-lg font-semibold text-black capitalize">
            Detailed Fees Structure. Please keep visiting the website for
            updated information.
          </span>
        </marquee>
    </div>
    <!-- section one -->
    <section class="my-4 max-w-[1450px] mx-auto px-5 md:px-0">
       {{-- <span class="text-base font-normal capitalize text-gray-600"
        >Home / M. Tech Microelectronics</span
        >--}}
        <div
            class="grid grid-cols-1 md:grid-cols-2 gap-4 items-start justify-between"
        >
            <div class="space-y-4 my-4">
                <h2 class="text-3xl font-bold text-black">
                    Design, Build, Test & Deploy at Micro and Nanoscale
                </h2>
                <p class="text-sm font-normal">
                    M.Tech. Microelectronics is a four-semester Work Integrated
                    Learning Program designed to provide electronics engineers with
                    the highly specialized knowledge and experience that they need to
                    design, fabricate and test devices, circuits and systems at 'micro
                    and nanoscale'.
                    <br />
                    <br />

                    M.Tech. Microelectronics is a BITS Pilani Work Integrated Learning
                    Program (WILP). BITS Pilani Work Integrated Learning Programs are
                    UGC approved.
                </p>
                <p class="text-sm font-normal">
                    Admission Open. Last date to apply is June 17, 2024.
                    <span class="font-semibold">
                For detailed program information, download the brochure
                below.</span
                    >
                </p>
                <p class="text-sm font-semibold underline">
                    Option to pay fees using an easy EMI with 0% interest and 0 down
                    payment.
                </p>
            </div>
            <div class="grid grid-cols-1 md: grid-cols-2 gap-4 my-4">
                <div class="flex flex-col justify-center items-center space-y-1">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-32 text-yellow-500"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5"
                        />
                    </svg>
                    <p class="text-sm font-normal">Study without</p>
                    <h4 class="text-xl font-medium">Career Break</h4>
                </div>
                <div class="flex flex-col justify-center items-center space-y-1">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-32 text-yellow-500"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z"
                        />
                    </svg>

                    <p class="text-sm font-normal">Study without</p>
                    <h4 class="text-xl font-medium">Career Break</h4>
                </div>
                <div class="flex flex-col justify-center items-center space-y-1">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-32 text-yellow-500"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z"
                        />
                    </svg>

                    <p class="text-sm font-normal">Last date to apply</p>
                    <h4 class="text-xl font-medium">June 17, 2024</h4>
                </div>
                <div class="flex flex-col justify-center items-center space-y-1">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-32 text-yellow-500"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 6h.008v.008H6V6Z"
                        />
                    </svg>
                    <p class="text-sm font-normal">Fees per semester</p>
                    <h4 class="text-xl font-medium">INR 66,750</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- section two -->
    <section class="my-4 max-w-[1450px] mx-auto px-5 md:px-0">
        <div class="flex justify-center items-center">
            <iframe
                width="1000"
                height="615"
                src="https://www.youtube.com/embed/YtsyI2_SGqY"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
            ></iframe>
        </div>
        <div
            class="flex flex-col md:flex-row items-center gap-4 justify-center my-8"
        >
            <button
                class="bg-[#0C2E50] p-4 text-base font-medium text-white w-full md:w-auto"
            >
                Download brochure
            </button>
            <button
                class="bg-[#0C2E50] p-4 text-base font-medium text-white w-full md:w-auto"
            >
                Apply Now
            </button>
        </div>
    </section>
    <!-- section three -->
    <section class="my-4 max-w-[1450px] mx-auto">
        <div class="flex flex-col md:flex-row items-start gap-10 w-full">
            <aside
                class="bg-[#000080] text-white py-8 px-14 w-full lg:w-[20%] flex flex-col space-y-8 lg:sticky lg:top-0 lg:h-screen lg:overflow-auto no-scrollbar"
            >
                <a
                    href="#"
                    class="capitalize inline-block text-base font-normal text-start"
                >Programme Highlights</a
                >
                <a
                    href="#"
                    class="capitalize inline-block text-base font-normal text-start"
                >UGC Approval</a
                >
                <a
                    href="#"
                    class="capitalize inline-block text-base font-normal text-start"
                >Programme Curriculum</a
                >
                <a
                    href="#"
                    class="capitalize inline-block text-base font-normal text-start"
                >Mode of Learning</a
                >
                <a
                    href="#"
                    class="capitalize inline-block text-base font-normal text-start"
                >Mode Of Examination</a
                >
                <a
                    href="#"
                    class="capitalize inline-block text-base font-normal text-start"
                >Eligibility</a
                >
                <a
                    href="#"
                    class="capitalize inline-block text-base font-normal text-start"
                >Fee Structure</a
                >
                <a
                    href="#"
                    class="capitalize inline-block text-base font-normal text-start"
                >How to Apply</a
                >
                <a
                    href="#"
                    class="capitalize inline-block text-base font-normal text-start"
                >Batch Profile</a
                >
                <a
                    href="#"
                    class="capitalize inline-block text-base font-normal text-start"
                >Featured Faculty</a
                >
                <a
                    href="#"
                    class="capitalize inline-block text-base font-normal text-start"
                >Student Speak</a
                >
                <a
                    href="#"
                    class="capitalize inline-block text-base font-normal text-start"
                >FAQs</a
                >
                <a
                    href="#"
                    class="capitalize inline-block text-base font-normal text-start"
                >Industry Endorsements</a
                >
            </aside>
            <div class="w-full lg:w-[80%] space-y-14 px-8 lg:px-0">
                <div class="space-x-4 flex flex-col flex-wrap">
                    <h4 class="text-4xl font-bold">Programme Highlights</h4>
                    <ul class="space-y-4 my-4">
                        <li class="list-decimal">
                            The M.Tech. Microelectronics is a Work Integrated Learning
                            Programme (WILP) spanning four semesters. BITS Pilani's Work
                            Integrated Learning Programmes are approved by the University
                            Grants Commission (UGC).
                        </li>
                        <li class="list-decimal">
                            Attend live-lectures from anywhere over an online
                            technology-enabled platform. These live lectures would be
                            conducted by faculty mostly on weekends or after business
                            hours enabling working professionals to pursue the programme
                            along with their jobs.
                        </li>
                        <li class="list-decimal">
                            The programme offers a set of courses that allow students to
                            gain expertise in areas that include back-end and front-end
                            microelectronics such as Processor & SoC Design, Chip Design,
                            VLSI CAD Tool Development and Semiconductor Fabrication.
                        </li>
                        <li class="list-decimal">
                            Participants will be able to use Remote Labs, that provide
                            remote access to hardware and software tools that are used for
                            designing and testing embedded systems on various platforms
                            such as MultiCore STM32, Vivado, Xilinix FPGA.
                        </li>
                        <li class="list-decimal">
                            The Dissertation (Project Work) in the final semester enables
                            students to apply concepts and techniques learnt during the
                            programme.
                        </li>
                        <li class="list-decimal">
                            The programme uses a Continuous Evaluation System that
                            assesses the learners over convenient and regular intervals.
                            Such a system provides timely and frequent feedback and helps
                            busy working professionals stay on course with the programme.
                        </li>
                        <li class="list-decimal">
                            The education delivery methodology is a blend of classroom and
                            experiential learning. Experiential learning consists of lab
                            exercises, assignments, case studies and work-integrated
                            activities.
                        </li>
                        <li class="list-decimal">
                            Participants who successfully complete the programme will
                            become members of an elite & global community of BITS Pilani
                            Alumni.
                        </li>
                        <li class="list-decimal">
                            Option to pay fees using an easy EMI with 0% interest and 0
                            down payment.
                        </li>
                    </ul>
                </div>
                <div class="space-y-4 flex flex-col flex-wrap">
                    <h4 class="text-4xl font-bold">UGC Approval</h4>
                    <p class="text-base font-normal">
                        BITS Pilani is an Institution of Eminence under UGC (Institution
                        of Eminence Deemed to be Universities) Regulations, 2017. The
                        Work Integrated Learning Programmes (WILP) of BITS Pilani
                        constitutes a unique set of educational offerings for working
                        professionals. WILP are an extension of programmes offered at
                        the BITS Pilani Campuses and are comparable to our regular
                        programmes both in terms of unit/credit requirements as well as
                        academic rigour. In addition, it capitalises and further builds
                        on practical experience of students through high degree of
                        integration, which results not only in upgradation of knowledge,
                        but also in up skilling, and productivity increase. The
                        programme may lead to award of degree, diploma, and certificate
                        in science, technology/engineering, management, and humanities
                        and social sciences. On the recommendation of the Empowered
                        Expert Committee, UGC in its 548th Meeting held on 09.09.20 has
                        approved the continued offering of BITS Pilani’s Work Integrated
                        Learning programmes.
                    </p>
                </div>
                <div class="space-y-4">
                    <h4 class="text-4xl font-bold">Programme Curriculum</h4>
                    <p class="text-base font-normal">
                        Participants need to take at least 12 courses towards
                        coursework, and complete one Project/ Dissertation. The
                        coursework requirement for the programme would consist of a set
                        of core courses and electives. Core courses are compulsory for
                        all participants, while electives can be chosen based on
                        individual learning preferences.
                    </p>
                    <div class="shadow-2xl bg-red p-4 rounded">
                        <div
                            class="flex justify-between items-center border-b border-gray-400 overflow-x-scroll w-full gap-4"
                        >
                            <p
                                class="text-2xl font-bold border-b-4 pb-1 border-yellow-400"
                            >
                                Fist semester
                            </p>
                            <p
                                class="text-2xl font-bold border-b-4 pb-1 border-yellow-400"
                            >
                                Second semester
                            </p>
                            <p
                                class="text-2xl font-bold border-b-4 pb-1 border-yellow-400"
                            >
                                Third semester
                            </p>
                            <p
                                class="text-2xl font-bold border-b-4 pb-1 border-yellow-400"
                            >
                                Fourth semester
                            </p>
                            <p
                                class="text-2xl font-bold border-b-4 pb-1 border-yellow-400"
                            >
                                Electives
                            </p>
                        </div>
                        <ul class="space-y-4 my-4 ps-8">
                            <li class="list-disc">VLSI Design</li>
                            <li class="list-disc">
                                Physics & Modeling of Microelectronic Devices
                            </li>
                            <li class="list-disc">Elective 1</li>
                            <li class="list-disc">Elective 2</li>
                        </ul>
                    </div>
                    <p class="text-base font-normal">
                        For more information on programme curriculum download the
                        programme brochure.
                    </p>
                    <p class="text-base font-normal">
                        Choice of Electives is made available to enrolled students at
                        the beginning of each semester. A limited selection of Electives
                        will be offered at the discretion of the Institute.
                    </p>
                    <div
                        class="bg-[#000080] text-white py-4 px-10 flex flex-col lg:flex-row items-center justify-between"
                    >
                        <p class="text-3xl font-normal">
                            For detailed programme curriculum, download the brochure.
                        </p>
                        <button class="text-white py-4 px-8 bg-[#8898EA]">
                            Download brochure
                        </button>
                    </div>
                </div>
                <div class="space-y-4 flex flex-col flex-wrap">
                    <h4 class="text-4xl font-bold">Mode of Learning</h4>
                    <p class="text-base font-normal">
                        The Mode of Learning is based on a powerful educational approach
                        called Work Integrated Learning. For detailed description of
                        work integrated learning
                    </p>
                    <div class="flex flex-col lg:flex-row items-start gap-8">
                        <div>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-20 text-yellow-400"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6.75 12-3-3m0 0-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"
                                />
                            </svg>
                        </div>
                        <div class="space-x-4 space-y-4">
                            <h3 class="text-base font-semibold">
                                The benefits of the Work Integrated Learning Mode are as
                                follows:
                            </h3>
                            <ul class="space-y-4">
                                <li class="list-decimal">
                                    It enables Working Professionals to pursue the programme
                                    without any career break and along with their jobs.
                                </li>
                                <li class="list-decimal">
                                    The programme curriculum is designed for high relevance to
                                    sectors, industries and organisations the students are
                                    presently employed in.
                                </li>
                                <li class="list-decimal">
                                    Learning experience design also endeavours to integrate
                                    support and value addition by the Industry Mentors and
                                    employer organizations.
                                </li>
                                <li class="list-decimal">
                                    Enables working professionals to attend live-lectures from
                                    anywhere over an online technology-enabled platform. For
                                    the benefit of working professionals these live lectures
                                    are conducted by faculty mostly on weekends or after
                                    business hours.
                                </li>
                                <li class="list-decimal">
                                    Leverages the latest educational technologies to provide
                                    easy access to asynchronous learning materials, Learner
                                    support services and peer to peer collaboration etc.
                                </li>
                                <li class="list-decimal">
                                    Great emphasis on experiential learning by providing
                                    access to state of the art remote labs, virtual labs and
                                    cloud labs and simulations as applicable to individual
                                    courses.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row items-start gap-8">
                        <div>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-20 text-yellow-400"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"
                                />
                            </svg>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-base font-semibold">EXPERIENTIAL LEARNING</h3>
                            <iframe
                                src="https://www.youtube.com/embed/YtsyI2_SGqY"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                class="w-full h-96"
                            ></iframe>
                            <p>
                                The programme emphasises on Experiential Learning that
                                allows learners to apply concepts learnt in the classroom in
                                simulated, and real work situations. This is achieved
                                through:
                            </p>
                            <div class="ms-8">
                                <p class="text-lg font-medium">Virtual & Remote Labs</p>
                                <p class="text-base font-normal">
                                    The remote labs provide you with remote access to hardware
                                    and software tools that are used for designing and testing
                                    embedded systems on various platforms such as MultiCore
                                    STM32, Vivado, Xilinix FPGA.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 items-start">
                        <div class="flex flex-col lg:flex-row items-start gap-8">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-52 text-yellow-500"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"
                                />
                            </svg>
                            <div>
                                <h4 class="uppercase text-xl font-medium">
                                    CONTINUOUS ASSESSMENT
                                </h4>
                                <p>
                                    Continuous Assessment includes graded Assignments/
                                    Quizzes, Mid-semester exam, and Comprehensive Exam.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row items-start gap-8">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-52 text-yellow-500"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"
                                />
                            </svg>

                            <div>
                                <h4 class="uppercase text-xl font-medium">
                                    CASE STUDIES AND ASSIGNMENTS
                                </h4>
                                <p>
                                    Carefully chosen real-world cases & assignments are both
                                    discussed and used as problem-solving exercises during the
                                    programme.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row items-start gap-8">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75"
                                />
                            </svg>

                            <div>
                                <h4 class="uppercase text-xl font-medium">
                                    DISSERTATION/ PROJECT WORK
                                </h4>
                                <p>
                                    The fourth semester offers an opportunity for learners to
                                    apply their knowledge gained during the programme to a
                                    real-world like complex project. The learner is expected
                                    to demonstrate understanding of vital principles learnt
                                    across semesters and their ability to successfully apply
                                    these concepts.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-4 bg-[#f0f0f0] p-4 flex flex-col flex-wrap">
                    <h4 class="text-4xl font-bold">Mode Of Examination</h4>
                    <p class="text-base font-medium underline">
                        Mode of Examinations applicable for students admitted in Batch
                        starting in July 2024 :
                    </p>
                    <p class="text-base font-normal">
                        Semester 1, 2 and 3 have Mid-Semester Examinations and
                        Comprehensive Examinations for each course. These examinations
                        are mostly scheduled on Friday, Saturday or Sunday. Students
                        need to

                        <span class="underline font-medium"
                        >appear in person for taking the examinations at the
                  institution’s designated examination centres</span
                        >
                    </p>
                    <p class="text-base font-normal">
                        Students can take their examination at any of our 32 designated
                        examination centres in India at the following locations:
                    </p>
                    <p class="text-base font-normal">
                        South Zone: Bangalore - North, Bangalore - Central, Bangalore -
                        South, Bangalore - East, Chennai - North , Chennai - Central ,
                        Chennai - South, Hyderabad, Secunderabad, Vijayawada,
                        Visakhapatnam, Kochi, Thiruvananthapuram and Coimbatore.
                    </p>
                    <p class="text-base font-normal">
                        North Zone: Delhi, Gurugram, Noida, Jaipur, Chandigarh, Lucknow
                        and Pilani.
                    </p>
                    <p class="text-base font-normal">
                        West Zone: Mumbai, Navi-Mumbai,Pune, Pune - Pimpri Chinchwad,
                        Goa, Ahmedabad, Indore and Nagpur.
                    </p>
                    <p class="text-base font-normal">
                        East Zone: Kolkata, Guwahati and Jamshedpur.
                    </p>
                    <p class="text-base font-normal">
                        In addition to these locations, the Institution also has a
                        designated examination centre in Dubai.
                    </p>
                    <p class="text-base font-normal">
                        During these semesters, in addition to the above mentioned
                        Mid-Semester and Comprehensive examinations, there will also be
                        Quizzes/Assignments conducted online on the Learning Management
                        System (LMS) as per the course plan in which the students need
                        to participate.
                    </p>
                    <p class="text-base font-normal">
                        In Semester 4 (Final Semester), the student will be doing
                        Dissertation/Project Work as per the Institution’s guidelines.
                    </p>
                </div>
                <div class="space-y-4 flex flex-col flex-wrap">
                    <h4 class="text-4xl font-bold">Eligibility Criteria</h4>

                    <p class="text-base font-normal">
                        Minimum eligibility to apply: Employed professionals holding BE/
                        B.Tech./ M.Sc. or equivalent in relevant disciplines, with at
                        least 60% aggregate marks and minimum one year of work
                        experience after the completion of the degree in relevant
                        domains.
                    </p>
                    <p class="text-base font-normal">
                        The programme is designed for highly driven and ambitious
                        engineers working in the Semiconductor industry who wish to gain
                        expertise in areas such as Chip design, Processor design or IC
                        fabrication.
                    </p>
                    <p class="text-base font-normal">
                        If you are a professional in technical roles such as FSM Process
                        Engineer, Micro-architect, Tool engineers, Analog/ Digital/
                        Mixed-Signal Chip Designer, you should consider applying to this
                        programme.
                    </p>
                </div>
                <div class="space-y-4 bg-[#f0f0f0] flex flex-col flex-wrap p-4">
                    <h4 class="text-4xl font-bold">Fee Structure</h4>

                    <p class="text-base font-normal">
                        The following fees schedule is applicable for candidates seeking
                        new admission during the academic year 2024-2025
                    </p>
                    <ul class="space-y-4">
                        <li class="list-disc">
                            Application Fees (one time) : INR 1,500
                        </li>
                        <li class="list-disc">
                            Admission Fees (one time) : INR 16,500
                        </li>
                        <li class="list-disc">
                            Semester Fees (per semester) : INR 66,750
                        </li>
                    </ul>
                    <p class="text-base font-normal">
                        The one-time Application Fee is to be paid at the time of
                        submitting the Application Form through the Online Application
                        Centre.
                    </p>
                    <p class="text-base font-normal">
                        Admission Fee (one-time) and Semester Fee (for the First
                        Semester) are to be paid together once admission is offered to
                        the candidate. Thus, a candidate who has been offered admission
                        will have to pay INR 83,250/-. You may choose to make the
                        payment using Netbanking/ Debit Card/ Credit Card through the
                        Online Application Centre. Option to pay fees using an easy EMI
                        with 0% interest and 0 down payment. Click here to learn more.
                    </p>
                    <p class="text-base font-normal">
                        Semester Fee for subsequent semesters will only be payable
                        later, i.e. at the beginning of those respective semesters.
                    </p>
                    <p class="text-base font-normal">
                        Any candidate who desires to discontinue from the programme
                        after confirmation of admission & registration for the courses
                        specified in the admit offer letter will forfeit the total
                        amount of fees paid.
                    </p>
                    <p class="text-base font-normal">
                        For the examination centre at Dubai, in addition to the semester
                        fees, for each semester there will be an examination centre fees
                        of 1000 UAE Dirhams or equivalent per semester out of which 500
                        UAE Dirhams is to be paid at the time of appearing in
                        Mid-semester examinations at Dubai Centre for that semester and
                        the remaining 500 UAE Dirhams is to be paid at the time of
                        appearing in comprehensive examinations at Dubai centre for that
                        semester.
                    </p>
                    <p class="text-base font-normal">
                        All the above fees are non-refundable.
                    </p>
                    <p class="text-base font-normal">
                        Important: For every course in the program institute will
                        recommend textbooks, students would need to procure these
                        textbooks on their own.
                    </p>
                </div>
                <div class="space-y-4 bg-[#f0f0f0] p-8 flex flex-col flex-wrap">
                    <h4 class="text-4xl font-bold">How to Apply</h4>

                    <ul class="space-y-4">
                        <li class="list-decimal">
                            Click here to Apply now. Create your login at the Application
                            Center by entering your unique Email id and create a password
                            of your choice.
                        </li>
                        <li class="list-decimal">
                            Once you have logged in, you will see a screen showing 4
                            essential steps to be completed to apply for the programme of
                            your choice.
                        </li>
                        <li class="list-decimal">
                            Begin by clicking on Step 1 - ‘Fill/ Edit and Submit
                            Application Form’. This will enable you to select the
                            programme of your choice. After you have chosen your
                            programme, you will be asked to fill your details in an online
                            form. You must fill all the details and press ‘Submit’ button
                            given at the bottom of the form.
                        </li>
                        <li class="list-decimal">
                            Take the next step by clicking on Step 2 - 'Download
                            Application PDF Copy’. This will download a pdf copy of the
                            application form on your computer.
                        </li>
                        <li class="list-decimal">
                            Now, click on Step 3 - 'Pay Application Fee’ to pay INR
                            1,500/- using Netbanking/ Debit Card/ Credit Card.
                        </li>
                        <li class="list-decimal">
                            Take a printout of the downloaded Application Form and note
                            down the Application Form Number displayed on the top-right
                            corner of the first page. This Application Form Number should
                            be referred in all future correspondence with BITS Pilani.
                        </li>
                        <li class="list-decimal">
                            In the printout of the downloaded Application Form, you will
                            notice on page no. 3 a section called the Employer Consent
                            Form. Complete the Employer Consent Form. This form needs to
                            be signed and stamped by your organisation’s HR or any other
                            authorised signatory of the company.
                            <p>
                                Important: In view of work-from-home policies mandated by
                                many organisations, a few candidates may not be able to get
                                the physical forms signed by their HR/ other authorised
                                organisational representative. Such candidates may instead
                                request an email approval to be sent to their official email
                                ID by the HR using the format available through this link.
                            </p>
                        </li>
                        <li class="list-decimal">
                            Further on page no. 4 of the printed Application Form is a
                            section called the Mentor Consent Form. The Mentor Consent
                            Form needs to be signed by the Mentor. Click here to know who
                            could be a Mentor.
                            <p>
                                Important: In view of work-from-home policies mandated by
                                many organisations, a few candidates may not be able to get
                                the physical forms signed by their Mentor. Such candidates
                                may instead request an email approval to be sent to their
                                official email ID by the Mentor using the format available
                                through this link.
                            </p>
                        </li>
                        <li class="list-decimal">
                            Further on page no. 5 of the downloaded Application Form, is a
                            Checklist of Enclosures/ Attachments.
                        </li>
                        <li class="list-decimal">
                            Make photocopies of the documents mentioned in this Checklist.
                        </li>
                        <li class="list-decimal">
                            Applicants are required to self-attest all academic mark
                            sheets and certificates.
                        </li>
                        <li class="list-decimal">
                            Finally, click on Step 4 - 'Upload & Submit All Required
                            Documents’. This will allow you to upload one-by-one the
                            printed Application Form, Mentor Consent Form, Employer
                            Consent Form, and all mandatory supporting documents and
                            complete the application process. Acceptable file formats for
                            uploading these documents are DOC, DOCX, PDF, ZIP and JPEG.
                        </li>
                        <li class="list-decimal">
                            Upon receipt of your Application Form and all other
                            enclosures, the Admissions Cell will scrutinise them for
                            completeness, accuracy and eligibility.
                        </li>
                        <li class="list-decimal">
                            Admission Cell will intimate selected candidates by email
                            within two weeks of submission of application with all
                            supporting documents. The selection status can also be checked
                            by logging in to the Online Application Centre.
                        </li>
                    </ul>
                </div>
                <div class="space-y-4 bg-[#f0f0f0] p-8 flex flex-col flex-wrap">
                    <h4 class="text-4xl font-bold">Batch Profile</h4>
                    <img src="{{ asset('eceimages/company-logo.jpg')}}" alt="company logo" />
                </div>
                <div class="space-y-4 p-8 flex flex-col flex-wrap">
                    <h4 class="text-4xl font-bold">Featured Faculty</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div
                            class="flex flex-col justify-center items-center p-4 shadow-2xl space-y-4"
                        >
                            <img
                                src="{{ asset('eceimages/faculty.jpg') }}"
                                alt="faculty"
                                class="rounded-full w-32 object-cover"
                            />
                            <p class="text-xl font-medium">Prof. Rejesh NA</p>
                            <button
                                class="border-t border-yellow-400 border-b capitalize pt-8"
                            >
                                amuse
                            </button>
                        </div>
                    </div>
                </div>
                <div class="space-y-4 bg-[#f0f0f0] p-8 flex flex-col flex-wrap">
                    <h4 class="text-4xl font-bold">Student Speak</h4>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <iframe
                            src="https://www.youtube.com/embed/YtsyI2_SGqY"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            class="w-full h-64"
                        ></iframe>
                        <iframe
                            class="w-full h-64"
                            src="https://www.youtube.com/embed/YtsyI2_SGqY"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
                <!-- faqs section -->
                <div class="space-y-4 p-8 flex flex-col flex-wrap">
                    <h4 class="text-4xl font-bold">FAQs</h4>
                    <div
                        id="accordion-flush"
                        data-accordion="collapse"
                        data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                        data-inactive-classes="text-gray-500 dark:text-gray-400"
                    >
                        <h2 id="accordion-flush-heading-1">
                            <button
                                type="button"
                                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                                data-accordion-target="#accordion-flush-body-1"
                                aria-expanded="true"
                                aria-controls="accordion-flush-body-1"
                            >
                                <span>What is Flowbite?</span>
                                <svg
                                    data-accordion-icon
                                    class="w-3 h-3 rotate-180 shrink-0"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 10 6"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 5 5 1 1 5"
                                    />
                                </svg>
                            </button>
                        </h2>
                        <div
                            id="accordion-flush-body-1"
                            class="hidden"
                            aria-labelledby="accordion-flush-heading-1"
                        >
                            <div
                                class="py-5 border-b border-gray-200 dark:border-gray-700"
                            >
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                    Flowbite is an open-source library of interactive
                                    components built on top of Tailwind CSS including buttons,
                                    dropdowns, modals, navbars, and more.
                                </p>
                                <p class="text-gray-500 dark:text-gray-400">
                                    Check out this guide to learn how to
                                    <a
                                        href="/docs/getting-started/introduction/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline"
                                    >get started</a
                                    >
                                    and start developing websites even faster with components
                                    on top of Tailwind CSS.
                                </p>
                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-2">
                            <button
                                type="button"
                                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                                data-accordion-target="#accordion-flush-body-2"
                                aria-expanded="false"
                                aria-controls="accordion-flush-body-2"
                            >
                                <span>Is there a Figma file available?</span>
                                <svg
                                    data-accordion-icon
                                    class="w-3 h-3 rotate-180 shrink-0"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 10 6"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 5 5 1 1 5"
                                    />
                                </svg>
                            </button>
                        </h2>
                        <div
                            id="accordion-flush-body-2"
                            class="hidden"
                            aria-labelledby="accordion-flush-heading-2"
                        >
                            <div
                                class="py-5 border-b border-gray-200 dark:border-gray-700"
                            >
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                    Flowbite is first conceptualized and designed using the
                                    Figma software so everything you see in the library has a
                                    design equivalent in our Figma file.
                                </p>
                                <p class="text-gray-500 dark:text-gray-400">
                                    Check out the
                                    <a
                                        href="https://flowbite.com/figma/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline"
                                    >Figma design system</a
                                    >
                                    based on the utility classes from Tailwind CSS and
                                    components from Flowbite.
                                </p>
                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-3">
                            <button
                                type="button"
                                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                                data-accordion-target="#accordion-flush-body-3"
                                aria-expanded="false"
                                aria-controls="accordion-flush-body-3"
                            >
                    <span
                    >What are the differences between Flowbite and Tailwind
                      UI?</span
                    >
                                <svg
                                    data-accordion-icon
                                    class="w-3 h-3 rotate-180 shrink-0"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 10 6"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 5 5 1 1 5"
                                    />
                                </svg>
                            </button>
                        </h2>
                        <div
                            id="accordion-flush-body-3"
                            class="hidden"
                            aria-labelledby="accordion-flush-heading-3"
                        >
                            <div
                                class="py-5 border-b border-gray-200 dark:border-gray-700"
                            >
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                    The main difference is that the core components from
                                    Flowbite are open source under the MIT license, whereas
                                    Tailwind UI is a paid product. Another difference is that
                                    Flowbite relies on smaller and standalone components,
                                    whereas Tailwind UI offers sections of pages.
                                </p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                    However, we actually recommend using both Flowbite,
                                    Flowbite Pro, and even Tailwind UI as there is no
                                    technical reason stopping you from using the best of two
                                    worlds.
                                </p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                    Learn more about these technologies:
                                </p>
                                <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                                    <li>
                                        <a
                                            href="https://flowbite.com/pro/"
                                            class="text-blue-600 dark:text-blue-500 hover:underline"
                                        >Flowbite Pro</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="https://tailwindui.com/"
                                            rel="nofollow"
                                            class="text-blue-600 dark:text-blue-500 hover:underline"
                                        >Tailwind UI</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="registration-form" class="popup-form">
        <div class="form-container">
            <span class="close-btn" id="close-btn">&times;</span>
            <h2>Register</h2>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>

                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</main>
