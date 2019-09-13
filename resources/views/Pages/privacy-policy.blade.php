@extends('Layouts.secondary')
@section('content')
    @include('Partials.minihero', [

        'minihero_title' => 'Privacy Policy',
        'minihero_desc' => 'You can read here our Privacy Policy of the Medicare',
        'image_bg' => 'about/about_header.png',

    ])

    <section class="container mx-auto flex flex-wrap text-base text-center px-3 md:px-0 lg:text-left">
        <span class="w-full text-right text-xs">Effective date: September 04, 2019</span>

        <div class="w-full mt-8">
            <p class="mt-4">Medicare Medicaid Advisors ("us", "we", or "our") operates the <a href="/"
                                                                                              class="underline">www.askmma.com
                    website</a> (hereinafter referred to as the "Service").</p>
            <p class="mt-4">This page informs you of our policies regarding the collection, use and disclosure of
                personal data when you use our Service and the choices you have associated with that data.</p>
            <p class="mt-4">We use your data to provide and improve the Service. By using the Service, you agree to the
                collection and use of information in accordance with this policy. Unless otherwise defined in this
                Privacy Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and
                Conditions, accessible from www.askmma.com</p>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Definitions</h3>
            <h4 class="font-bold mt-4">Service</h4>
            <p>Service is the www.askmma.com website operated by Medicare Medicaid Advisors</p>

            <h4 class="font-bold mt-4">Personal Data</h4>
            <p>Personal Data means data about a living individual who can be identified from those data (or from those
                and other information either in our possession or likely to come into our possession).</p>

            <h4 class="font-bold mt-4">Usage Data</h4>
            <p>Usage Data is data collected automatically either generated by the use of the Service or from the Service
                infrastructure itself (for example, the duration of a page visit).</p>

            <h4 class="font-bold mt-4">Cookies</h4>
            <p>Cookies are small files stored on your device (computer or mobile device).</p>

            <h4 class="font-bold mt-4">Data Controller</h4>
            <p>Data Controller means the natural or legal person who (either alone or jointly or in common with other
                persons) determines the purposes for which and the manner in which any personal information are, or are
                to be, processed.</p>
            <p>For the purpose of this Privacy Policy, we are a Data Controller of your Personal Data.</p>

            <h4 class="font-bold mt-4">Data Processors (or Service Providers)</h4>
            <p>Data Processor (or Service Provider) means any natural or legal person who processes the data on behalf
                of the Data Controller.</p>
            <p>We may use the services of various Service Providers in order to process your data more effectively</p>

            <h4 class="font-bold mt-4">Data Subject (or User)</h4>
            <p>Data Subject is any living individual who is using our Service and is the subject of Personal Data</p>
        </div>


        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Information Collection and Use</h3>
            <p class="mt-4">We collect several different types of information for various purposes to provide and
                improve our Service to you.</p>

            <h4 class="font-bold mt-6">Types of Data Collected</h4>

            <h4 class="font-bold mt-2 italic">Personal Data</h4>
            <p>While using our Service, we may ask you to provide us with certain personally identifiable information
                that can be used to contact or identify you ("Personal Data"). Personally identifiable information may
                include, but is not limited to:</p>
            <ul class="list-disc">
                <li>Email address</li>
                <li>First name and last name</li>
                <li>Cookies and Usage Data</li>
            </ul>
            <p>We may use your Personal Data to contact you with newsletters, marketing or promotional materials and
                other information that may be of interest to you. You may opt out of receiving any, or all, of these
                communications from us by following the unsubscribe link or the instructions provided in any email we
                send.</p>

            <h4 class="font-bold mt-2 italic">Usage Data</h4>
            <p>We may also collect information on how the Service is accessed and used ("Usage Data"). This Usage Data
                may include information such as your computer's Internet Protocol address (e.g. IP address), browser
                type, browser version, the pages of our Service that you visit, the time and date of your visit, the
                time spent on those pages, unique device identifiers and other diagnostic data.</p>


            <h4 class="font-bold mt-2 italic">Location Data</h4>
            <p>We may use and store information about your location if you give us permission to do so ("Location
                Data"). We use this data to provide features of our Service, to improve and customise our Service.</p>
            <p>You can enable or disable location services when you use our Service at any time by way of your device
                settings.</p>


            <h4 class="font-bold mt-2 italic">Tracking Cookies Data</h4>
            <p>We use cookies and similar tracking technologies to track the activity on our Service and we hold certain
                information.</p>
            <p>Cookies are files with a small amount of data which may include an anonymous unique identifier. Cookies
                are sent to your browser from a website and stored on your device. Other tracking technologies are also
                used such as beacons, tags and scripts to collect and track information and to improve and analyse our
                Service.</p>
            <p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However,
                if you do not accept cookies, you may not be able to use some portions of our Service.</p>
            <p>Examples of Cookies we use:</p>
            <ul>
                <li>
                    <strong>Session Cookies.</strong> We use Session Cookies to operate our Service.
                </li>
                <li>
                    <strong>Preference Cookies.</strong> We use Preference Cookies to remember your preferences and
                    various settings.
                </li>
                <li>
                    <strong>Security Cookies.</strong> We use Security Cookies for security purposes.
                </li>
            </ul>
        </div>


        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Use of Data</h3>
            <p class="mt-4">Medicare Medicaid Advisors uses the collected data for various purposes:</p>
            <ul>
                <li>To provide and maintain our Service</li>
                <li>To notify you about changes to our Service</li>
                <li>To allow you to participate in interactive features of our Service when you choose to do so</li>
                <li>To provide customer support</li>
                <li>To gather analysis or valuable information so that we can improve our Service</li>
                <li>To monitor the usage of our Service</li>
                <li>To detect, prevent and address technical issues</li>
                <li>To provide you with news, special offers and general information about other goods, services and
                    events which we offer that are similar to those that you have already purchased or enquired about
                    unless you have opted not to receive such information
                </li>
            </ul>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Legal Basis for Processing Personal Data
                under the General Data Protection Regulation (GDPR)</h3>
            <p class="mt-4">If you are from the European Economic Area (EEA), Medicare Medicaid Advisors legal basis for
                collecting and using the personal information described in this Privacy Policy depends on the Personal
                Data we collect and the specific context in which we collect it.</p>
            <p class="mt-4">Medicare Medicaid Advisors may process your Personal Data because:</p>
            <ul>
                <li>We need to perform a contract with you</li>
                <li>You have given us permission to do so</li>
                <li>The processing is in our legitimate interests and it is not overridden by your rights</li>
                <li>To comply with the law</li>
            </ul>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Retention of Data</h3>
            <p class="mt-4">Medicare Medicaid Advisors will retain your Personal Data only for as long as is necessary
                for the purposes set out in this Privacy Policy. We will retain and use your Personal Data to the extent
                necessary to comply with our legal obligations (for example, if we are required to retain your data to
                comply with applicable laws), resolve disputes and enforce our legal agreements and policies.</p>
            <p class="mt-4">Medicare Medicaid Advisors will also retain Usage Data for internal analysis purposes. Usage
                Data is generally retained for a shorter period of time, except when this data is used to strengthen the
                security or to improve the functionality of our Service, or we are legally obligated to retain this data
                for longer periods.</p>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Transfer of Data</h3>
            <p class="mt-4">Your information, including Personal Data, may be transferred to - and maintained on -
                computers located outside of your state, province, country or other governmental jurisdiction where the
                data protection laws may differ from those of your jurisdiction.</p>
            <p class="mt-4">If you are located outside United States and choose to provide information to us, please
                note that we transfer the data, including Personal Data, to United States and process it there.</p>
            <p class="mt-4">Your consent to this Privacy Policy followed by your submission of such information
                represents your agreement to that transfer.</p>
            <p class="mt-4">Medicare Medicaid Advisors will take all the steps reasonably necessary to ensure that your
                data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal
                Data will take place to an organisation or a country unless there are adequate controls in place
                including the security of your data and other personal information.</p>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Disclosure of Data</h3>

            <h4 class="font-bold mt-2 italic">Disclosure for Law Enforcement</h4>
            <p>Under certain circumstances, Medicare Medicaid Advisors may be required to disclose your Personal Data if
                required to do so by law or in response to valid requests by public authorities (e.g. a court or a
                government agency).</p>

            <h4 class="font-bold mt-2 italic">Legal Requirements</h4>
            <p>Medicare Medicaid Advisors may disclose your Personal Data in the good faith belief that such action is
                necessary to:</p>
            <ul>
                <li>To comply with a legal obligation</li>
                <li>To protect and defend the rights or property of Medicare Medicaid Advisors</li>
                <li>To prevent or investigate possible wrongdoing in connection with the Service</li>
                <li>To protect the personal safety of users of the Service or the public</li>
                <li>To protect against legal liability</li>
            </ul>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Security of Data</h3>
            <p class="mt-4">The security of your data is important to us but remember that no method of transmission
                over the Internet or method of electronic storage is 100% secure. While we strive to use commercially
                acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>
        </div>


        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Our Policy on "Do Not Track" Signals under
                the California Online Protection Act (CalOPPA)</h3>
            <p class="mt-4">We do not support Do Not Track ("DNT"). Do Not Track is a preference you can set in your web
                browser to inform websites that you do not want to be tracked.</p>
            <p class="mt-4">You can enable or disable Do Not Track by visiting the Preferences or Settings page of your
                web browser.</p>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Your Data Protection Rights under the General
                Data Protection Regulation (GDPR)</h3>
            <p class="mt-4">If you are a resident of the European Economic Area (EEA), you have certain data protection
                rights. Medicare Medicaid Advisors aims to take reasonable steps to allow you to correct, amend, delete
                or limit the use of your Personal Data.</p>
            <p class="mt-4">If you wish to be informed about what Personal Data we hold about you and if you want it to
                be removed from our systems, please contact us.</p>
            <p class="mt-4">In certain circumstances, you have the following data protection rights:</p>
            <div class="pl-4">
                <p><strong>The right to access, update or delete the information we have on you.</strong> Whenever made
                    possible, you can access, update or request deletion of your Personal Data directly within your
                    account settings section. If you are unable to perform these actions yourself, please contact us to
                    assist you.</p>
                <p class="mt-2"><strong>The right of rectification.</strong> You have the right to have your information
                    rectified if that information is inaccurate or incomplete.</p>
                <p class="mt-2"><strong>The right to object.</strong> You have the right to object to our processing of
                    your Personal Data.</p>
                <p class="mt-2"><strong>The right of restriction.</strong> You have the right to request that we
                    restrict the processing of your personal information.</p>
                <p class="mt-2"><strong>The right to data portability.</strong> You have the right to be provided with a
                    copy of the information we have on you in a structured, machine-readable and commonly used format.
                </p>
                <p class="mt-2"><strong>The right to withdraw consent.</strong> You also have the right to withdraw your
                    consent at any time where Medicare Medicaid Advisors relied on your consent to process your personal
                    information</p>
            </div>
            <p class="mt-4">Please note that we may ask you to verify your identity before responding to such
                requests.</p>
            <p class="mt-4">You have the right to complain to a Data Protection Authority about our collection and use
                of your Personal Data. For more information, please contact your local data protection authority in the
                European Economic Area (EEA).</p>
        </div>


        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Service Providers</h3>
            <p class="mt-4">We may employ third party companies and individuals to facilitate our Service ("Service
                Providers"), provide the Service on our behalf, perform Service-related services or assist us in
                analysing how our Service is used.</p>
            <p class="mt-4">These third parties have access to your Personal Data only to perform these tasks on our
                behalf and are obligated not to disclose or use it for any other purpose.</p>

            <h4 class="font-bold mt-2 italic">Analytics</h4>
            <p>We may use third-party Service Providers to monitor and analyse the use of our Service.</p>

            <div class="pl-4 mt-4">
                <h4 class="font-bold mt-2 text-sm">Google Analytics</h4>
                <p>Google Analytics is a web analytics service offered by Google that tracks and reports website
                    traffic. Google uses the data collected to track and monitor the use of our Service. This data is
                    shared with other Google services. Google may use the collected data to contextualise and
                    personalise the ads of its own advertising network.</p>
                <p>You can opt-out of having made your activity on the Service available to Google Analytics by
                    installing the Google Analytics opt-out browser add-on. The add-on prevents the Google Analytics
                    JavaScript (ga.js, analytics.js and dc.js) from sharing information with Google Analytics about
                    visits activity.</p>
                <p>For more information on the privacy practices of Google, please visit the Google Privacy Terms web
                    page: <a href="https://policies.google.com/privacy?hl=en" class="underline">https://policies.google.com/privacy?hl=en</a>
                </p>


                <h4 class="font-bold mt-2 text-sm">Mixpanel</h4>
                <p>Mixpanel is provided by Mixpanel Inc.</p>
                <p>You can prevent Mixpanel from using your information for analytics purposes by opting-out. To opt-out
                    of Mixpanel service, please visit this page: <a href="https://mixpanel.com/optout/">https://mixpanel.com/optout/</a>
                </p>
                <p>For more information on what type of information Mixpanel collects, please visit the Terms of Use
                    page of Mixpanel: <a href="https://mixpanel.com/terms/">https://mixpanel.com/terms/</a></p>
            </div>

            <h4 class="font-bold mt-2 italic">Behavioral Remarketing</h4>
            <p>Medicare Medicaid Advisors uses remarketing services to advertise on third party websites to you after
                you visited our Service. We and our third-party vendors use cookies to inform, optimise and serve ads
                based on your past visits to our Service.</p>

            <div class="pl-4 mt-4">
                <h4 class="font-bold mt-2 text-sm">Google Ads (AdWords)</h4>
                <p>Google Ads (AdWords) remarketing service is provided by Google Inc.</p>
                <p>You can opt-out of Google Analytics for Display Advertising and customise the Google Display Network
                    ads by visiting the Google Ads Settings page: </p>
                <p><a href="http://www.google.com/settings/ads" class="underline">http://www.google.com/settings/ads</a>
                    Google also recommends installing the Google Analytics Opt-out Browser Add-on</p>
                <p><a href="https://tools.google.com/dlpage/gaoptout" class="underline">https://tools.google.com/dlpage/gaoptout</a>
                    - for your web browser. Google Analytics Opt-out Browser Add-on provides visitors with the ability
                    to prevent their data from being collected and used by Google Analytics.</p>
                <p>For more information on the privacy practices of Google, please visit the Google Privacy Terms web
                    page: <a href="https://policies.google.com/privacy?hl=en" class="underline">https://policies.google.com/privacy?hl=en</a>
                </p>


                <h4 class="font-bold mt-2 text-sm">Bing Ads Remarketing</h4>
                <p>Bing Ads remarketing service is provided by Microsoft Inc.</p>
                <p>You can opt-out of Bing Ads interest-based ads by following their instructions: <a
                            href="https://advertise.bingads.microsoft.com/en-us/resources/policies/personalized-ads">https://advertise.bingads.microsoft.com/en-us/resources/policies/personalized-ads</a>
                </p>
                <p>You can learn more about the privacy practices and policies of Microsoft by visiting their Privacy
                    Policy page: <a href="https://privacy.microsoft.com/en-us/PrivacyStatement">https://privacy.microsoft.com/en-us/PrivacyStatement</a>
                </p>


                <h4 class="font-bold mt-2 text-sm">Twitter</h4>
                <p>Twitter remarketing service is provided by Twitter Inc.</p>
                <p>You can opt-out from Twitter's interest-based ads by following their instructions: <a
                            href="https://support.twitter.com/articles/20170405">https://support.twitter.com/articles/20170405</a>
                </p>
                <p>You can learn more about the privacy practices and policies of Twitter by visiting their Privacy
                    Policy page: <a href="https://twitter.com/privacy">https://twitter.com/privacy</a></p>


                <h4 class="font-bold mt-2 text-sm">Facebook</h4>
                <p>Facebook remarketing service is provided by Facebook Inc.</p>
                <p>You can learn more about interest-based advertising from Facebook by visiting this page: <a
                            href="https://www.facebook.com/help/164968693837950">https://www.facebook.com/help/164968693837950</a>
                </p>
                <p>To opt-out from Facebook's interest-based ads, follow these instructions from Facebook: <a
                            href="https://www.facebook.com/help/568137493302217">https://www.facebook.com/help/568137493302217</a>
                </p>
                <p>
                    Facebook adheres to the Self-Regulatory Principles for Online Behavioural Advertising established by
                    the Digital Advertising Alliance. You can also opt-out from Facebook and other participating
                    companies through the Digital Advertising Alliance in the USA <a
                            href="http://www.aboutads.info/choices/"
                            class="underline">http://www.aboutads.info/choices/</a>, the Digital Advertising Alliance of
                    Canada in Canada <a href="http://youradchoices.ca/" class="underline">http://youradchoices.ca/</a>
                    or the European Interactive Digital Advertising Alliance in Europe <a
                            href="http://www.youronlinechoices.eu/"
                            class="underline">http://www.youronlinechoices.eu/</a>, or opt-out using your mobile device
                    settings.
                </p>
                <p>For more information on the privacy practices of Facebook, please visit Facebook's Data Policy: <a
                            href="https://www.facebook.com/privacy/explanation" class="underline">https://www.facebook.com/privacy/explanation</a>
                </p>
            </div>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Links to Other Sites</h3>
            <p class="mt-4">Our Service may contain links to other sites that are not operated by us. If you click a
                third party link, you will be directed to that third party's site. We strongly advise you to review the
                Privacy Policy of every site you visit.</p>
            <p class="mt-4">We have no control over and assume no responsibility for the content, privacy policies or
                practices of any third party sites or services.</p>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Children's Privacy</h3>
            <p class="mt-4">Our Service does not address anyone under the age of 18 ("Children").</p>
            <p class="mt-4">We do not knowingly collect personally identifiable information from anyone under the age of
                18. If you are a parent or guardian and you are aware that your Child has provided us with Personal
                Data, please contact us. If we become aware that we have collected Personal Data from children without
                verification of parental consent, we take steps to remove that information from our servers.</p>
        </div>

        <div class="w-full mt-8">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Changes to This Privacy Policy</h3>
            <p class="mt-4">We may update our Privacy Policy from time to time. We will notify you of any changes by
                posting the new Privacy Policy on this page.</p>
            <p class="mt-4">We will let you know via email and/or a prominent notice on our Service, prior to the change
                becoming effective and update the "effective date" at the top of this Privacy Policy.</p>
            <p class="mt-4">You are advised to review this Privacy Policy periodically for any changes. Changes to this
                Privacy Policy are effective when they are posted on this page.</p>
        </div>

        <div class="w-full mt-8 mb-6">
            <h3 class="font-extrabold text-lg text-gray-900 text-gray-900">Contact Us</h3>
            <p class="mt-4">If you have any questions about this Privacy Policy, please contact us:</p>
            <ul>
                <li>By Email: chat@askmma.com</li>
                <li>
                    By visiting this page on our Website: <a href="https://www.askmma.com/contact" class="underline">https://www.askmma.com/contact</a>
                </li>

            </ul>
        </div>
    </section>
    <the-copywrite></the-copywrite>
    @include('Partials/readytosee')

@endsection