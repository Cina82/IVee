<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--<script src="{{URL::to('public/assets/jquery.min.js')}}">
</script>
<script src="{{URL::to('public/assets/jquery.browser-c000434a.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.0/jquery-migrate.min.js"></script>
<script src="{{URL::to('public/assets/lodash.min.js')}}">
</script>
<script>
    _.contains = _.includes;
</script>
<script src="https://static.thumbtackstatic.com/_assets/javascript/release/bundles/foundation_bundle-6b3b21fa.js.gz"></script>

<script>
    _createTTNamespace(
        false,
        [],
        {"primo":true},
        []
    );

            function postResponsivenessMetrics() {
            var metrics = {};
            for (var metric in window.performance.timing) {
                if (metric !== 'toJSON' && _.isInteger(window.performance.timing[metric])) {
                    metrics[metric] = window.performance.timing[metric];
                }
            }
            var data = {
                key: "2b5sk8c98i0r076bp07uk534fh7ial4i690qrmvs4kjc3ssnrlj",
                tags: {},
                data: metrics,
            };
            $.post(
                '/ajax/responsiveness',
                data
                            );
        }

        if (window.performance && window.performance.timing) {
            postResponsivenessMetrics();

            $(document).ready(function() {
                                postResponsivenessMetrics()

                $(window).on('load', function() {
                                        window.setTimeout(function() {
                        postResponsivenessMetrics()
                    }, 0);
                });
            });
        }
    </script>

    <script src="{{URL::to('public/assets/bundle-ebb06845.js')}}"></script>
    <script src="{{URL::to('public/assets/angular.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js"></script>
    <script src="{{URL::to('public/assets/pro_signup_bundle-31f67e12.js')}}"></script>
    <script src="{{URL::to('public/assets/core.es6-2386888a.js')}}"></script>

    <script>
        TT.domReady(function() {
            TT.loggedin = false;

            
                                            $.ajax({
                                            url: "https://static8.thumbtackstatic.com/media/primo/fonts/AvenirNextDemi.woff",
                                        beforeSend: function(xhr) {
                        xhr.overrideMimeType("application/octet-stream");
                    },
                    success: function(data) {
                        $("<link />", {
                            "rel": "stylesheet",
                            "href": "https://static.thumbtackstatic.com/_assets/styles/release/legacy-css/base/primo/font-face/avenir-next-bd2ae205.css.gz"
                        }).appendTo("head");
                    }
                });

                // Required for tracking font usage.
                var MTIProjectId = "a212b055-e197-4bd2-a1a6-652454312d1e";
                var mtiTracking = document.createElement("script");
                mtiTracking.type = "text/javascript";
                mtiTracking.async = "true";
                mtiTracking.src = ("https:" == document.location.protocol ? "https:" : "http:") +
                    "//fast.fonts.net/t/trackingCode.js";
                $(mtiTracking).appendTo("head");
                    });
    </script><script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-6981433-1', 'auto');
            ga('require', 'GTM-PCGNZW');
            ga('send', 'pageview');
        </script><script>
        var signalCoData = {};
        
        (function () {
            var tagjs = document.createElement("script");
            var s = document.getElementsByTagName("script")[0];
            tagjs.async = true;
            tagjs.src = "//s.btstatic.com/tag.js#site=GYp4tcM";
            s.parentNode.insertBefore(tagjs, s);
        })();
    </script><noscript><iframe src="//s.thebrighttag.com/iframe?c=GYp4tcM" width="1" height="1" frameborder="0"
            scrolling="no" marginheight="0" marginwidth="0"></iframe></noscript><div id="preload"></div><script>
        $(window).on("load", function() {
            TT.initPiede();
        });
    </script><script>
        $(document).ready(function() {

            
            if (TT.env.primo || false) {
                TT.initPrimoHeader();
            }
        });
    </script>
            

    <script>
    $(window).scroll(function(event) {
        // parallax effect
        // https://css-tricks.com/slide-in-as-you-scroll-down-boxes/
        var windowBottom = $(window).scrollTop()+$(window).height();
        var backgroundTopOffset = $('#background-top').offset();
        var backgroundY = backgroundTopOffset
            ? backgroundTopOffset.top
            : null;
        var mobileMaxWidth = 550;

        // these transform animations currently perform poorly on mobile devices
        if (!window.TT_MOBILE && !isNaN(backgroundY) && windowBottom > backgroundY) {
            var delta = 0;

            // at mobile size, we don't allow for parallax because of css conflicts
            if ($(window).width() > mobileMaxWidth) {
                delta = Math.min(65, (windowBottom - backgroundY) / 15);
            }

            window.requestAnimationFrame(function() {
                $("#background").css("transform", "translate(0px,"+delta+"px)");
            });
        }

        var slideBox = $('#pro1').offset().top;
        if (windowBottom > slideBox) {
            $('#pro1').addClass("appear-slide-right");
        }
        var slideBox = $('#pro2').offset().top;
        if (windowBottom > slideBox) {
            $('#pro2').addClass("appear-slide-up");
        }
        var slideBox = $('#pro3').offset().top;
        if (windowBottom > slideBox) {
            $('#pro3').addClass("appear-fade");
        }
        var slideBox2 = $('#pro4').offset().top;
        if (windowBottom > slideBox2) {
            $('#pro4').addClass("appear-slide-up");
        }
        var slideBox3 = $('#pro5').offset().top;
        if (windowBottom > slideBox3) {
            $('#pro5').addClass("appear-slide-left");
        }
        var slideBox4 = $('#pro-success').offset().top;
        if (windowBottom > slideBox4) {
            $('#pro-success').addClass("appear-fade");
        }
    });
    </script>

    <script>
        $(document).ready(function() {
           angular.module("ProValueApp")
           .constant("categories", {"Academic Lessons":{"icon_url":"\/media\/native\/signup\/tt_lessons_icon.png","percentage":0.046,"sentenceTaxonym":"teachers","services":{"ACT Tutoring":[191],"Algebra Tutoring":[80],"English Lessons":[996],"French Lessons":[989],"Math Tutoring":[7,1175,1176,1177,1178,1179],"Multi-Subject Tutoring":[245],"Reading and Writing Tutoring":[244],"SAT Tutoring":[186],"Spanish Lessons":[988]}},"Business":{"icon_url":"\/media\/native\/signup\/tt_business_icon.png","percentage":0.0267,"sentenceTaxonym":"business pros","services":{"Accounting":[491],"Business Consulting":[509],"HR and Payroll Services":[497],"Marketing":[508],"Security Guard Services":[248],"Social Media Marketing":[801],"Tax Preparation":[504,1590]}},"Cleaning":{"icon_url":"\/media\/native\/signup\/tt_carpetcleaning_icon.png","percentage":0.1453,"sentenceTaxonym":"cleaners","services":{"Carpet Cleaning":[40],"Cleaning Out":[1128],"Commercial Cleaning":[43],"Floor Cleaning":[1152],"House Cleaning":[1128],"Junk Removal":[730],"Office Cleaning":[43],"Power Washing":[170],"Steam Cleaning":[1128],"Upholstery and Furniture Cleaning":[305],"Window Cleaning":[91]}},"Design, Web, and Tech Services":{"icon_url":"\/media\/native\/signup\/tt_design_icon.png","percentage":0.008500000000000001,"sentenceTaxonym":"design, web, and tech pros","services":{"Computer Repair":[6],"Data Recovery Service":[406],"Graphic Design":[36],"Logo Design":[37],"Phone or Tablet Repair":[1063],"Print Design":[38]}},"Events":{"icon_url":"\/media\/native\/signup\/tt_events_icon.png","percentage":0.1705,"sentenceTaxonym":"event pros","services":{"Balloon Artistry":[103,1437],"Band Entertainment":[388,1207,1223,1209],"Comedy Entertainment":[1458],"Dance Entertainment":[114,106],"DJ":[4],"Entertainment":[1461,1458],"Event Florist":[300],"Event Hair Styling":[158],"Event Hair and Makeup":[14],"Event Makeup":[14],"Face Painting":[93],"Fortune Teller Entertainment":[1309,1303,1305,826,825,828],"Karaoke Machine Rental":[144],"Magician":[118],"MC and Hosts":[119],"Moon Bounce Rental Services":[1600],"Party Bus Rental":[661],"Limousine Rental":[1306],"Party Planning":[290,1357,1358,1360,1361,287,288,289,105],"Party Rental Supplies":[290],"Photo Booth Rental":[124,1318],"Wedding Officiant":[3],"Wedding Planning":[87]}},"Food and Beverage":{"icon_url":"\/media\/native\/signup\/tt_catering_icon.png","percentage":0.0364,"sentenceTaxonym":"food and beverage pros","services":{"Bartending":[261],"Catering":[33],"Personal Chef":[716],"Food Truck or Cart Services":[715],"Pastry Chef Services":[264],"Wedding Cakes":[854],"Cooking Lessons":[581]}},"Home Improvement":{"icon_url":"\/media\/native\/signup\/tt_home_icon.png","percentage":0.2455,"sentenceTaxonym":"home improvement pros","services":{"Appliance Repair":[937],"Carpet Installation":[786],"Central Air Conditioning Installation":[345],"Concrete Installation":[1008],"Deck or Porch Services":[164],"Electrical":[98],"Exterior Painting":[181],"Flooring":[1064],"Furniture Assembly":[339,1118,1521,1522,1523,1524,1525,1526,1527,1528,1529,1530],"Furniture Refinishing":[480],"General Carpentry":[835],"General Contracting":[10],"Handyman":[2],"Home Organizing":[1171],"Home Remodeling":[985],"Home Theater Installation":[5],"Interior Design":[35],"Interior Painting":[78],"Land Surveying":[489],"Local Moving (under 50 miles)":[97],"Long Distance Moving":[990],"Pest Control Services":[246],"Plumbing":[182],"Real Estate Inspection":[858],"Roof Installation or Replacement":[986],"Upholstery Repair":[1172]}},"Landscaping and Lawncare":{"icon_url":"\/media\/native\/signup\/tt_treeplanting_icon.png","percentage":0.07530000000000001,"sentenceTaxonym":"landscaping and lawncare pros","services":{"Fence Installation":[954],"Fence Repair and Maintenance":[955],"Gardening":[174],"Landscape Design":[175],"Landscaping":[175],"Lawn Mowing and Lawncare":[96],"Snow Plowing":[1583],"Sod Installation":[176],"Sprinkler System Installation":[437],"Sprinkler System Repair and Maintenance":[1017],"Tree Stump Grinding and Removal":[180],"Tree and Shrub Planting, Maintenance, or Removal":[1015]}},"Legal":{"icon_url":"\/media\/native\/signup\/tt_legal_icon.png","percentage":0.0256,"sentenceTaxonym":"legal pros","services":{"Bankruptcy Attorney":[612],"Criminal Defense Attorney":[633],"DUI Attorney":[608],"Divorce Attorney":[506],"Family Law Attorney":[635],"Immigration Attorney":[610],"Legal Document Preparation":[905],"Legal Services":[604],"Notarization":[904],"Personal Injury Attorney":[638]}},"Music and Dance Lessons":{"icon_url":"\/media\/native\/signup\/tt_musicnote_icon.png","percentage":0.0444,"sentenceTaxonym":"instructors","services":{"Ballroom Dance Lessons":[919],"Belly Dance Lessons":[922],"Dance Lessons":[1190],"Drum Lessons":[54,1180,1181],"Guitar Lessons":[44],"Hip Hop Dance Lessons":[924],"Piano Lessons":[67],"Singing Lessons":[9],"Violin Lessons":[74,1182,1183]}},"Other":{"services":[]},"Pets":{"icon_url":"\/media\/native\/signup\/tt_pets_icon.png","percentage":0.0451,"sentenceTaxonym":"pet pros","services":{"Animal Behavior Modification":[929],"Dog Grooming":[1154],"Dog Training":[1148],"Dog Walking":[89],"Pet Care":[353],"Pet Sitting":[102],"Wildlife Removal":[247]}},"Photography and Videography":{"icon_url":"\/media\/native\/signup\/tt_photography_icon.png","percentage":0.0107,"sentenceTaxonym":"photographers and videographers","services":{"AV Equipment Rental for Events":[297],"Audio Recording":[77],"Boudoir Photography":[23],"Commercial, Movie, or Music Videography":[1025],"Engagement Photography":[928],"Event Photography":[16],"Event Videography":[39],"Headshot Photography":[26],"Portrait Photography":[13],"Video Editing":[719],"Wedding Photography":[8],"Wedding Videography":[32]}},"Sports and Fitness Lessons":{"icon_url":"\/media\/native\/signup\/tt_fitness_icon.png","percentage":0.0127,"sentenceTaxonym":"coaches","services":{"Basketball Lessons":[550],"Golf Lessons":[554],"Horseback Riding Lessons":[556,1186,1187],"Personal Training":[12],"Pilates Training":[360],"Surfing Lessons":[573],"Swimming Lessons":[1161],"Tai Chi Lessons":[362],"Tennis Instruction":[1188],"Yoga Lessons":[1159,1469,1470,1471,1472]}},"Tailoring":{"icon_url":"\/media\/native\/signup\/tt_thimble_icon.png","percentage":0.01,"sentenceTaxonym":"tailors","services":{"Alterations":[1394],"Bridesmaid Dress Alterations":[1365],"Wedding Dress Alterations":[851],"Custom Clothes Design":[1396],"Custom Tailor":[1395]}},"Wellness":{"icon_url":"\/media\/native\/signup\/tt_wellness_icon.png","percentage":0.1034,"sentenceTaxonym":"wellness pros","services":{"CPR Training":[377],"Career Coaching":[1310],"Life Coaching":[476,1447,1448],"Therapy":[475],"Relationship Counseling":[1375],"Marriage Counseling":[1375],"Mental Health Counseling":[1450],"Social Anxiety Counseling":[1449],"Massage Therapy":[95],"Facial":[1311,1312],"Body Treatments":[1313],"Hair Treatments":[1314],"Nail Treatments":[1315,1316],"Nutritionist":[394],"Physical Therapy":[658],"Acupuncture Services":[655],"Alternative Healing":[474],"Reiki Healing":[917]}},"Writing\/Editing\/Translation":{"icon_url":"\/media\/native\/signup\/tt_readingwriting_icon.png","percentage":0.0037,"sentenceTaxonym":"writing","services":{"Editing":[241],"French Translation":[212],"German Translation":[214],"Mandarin Translation":[223],"Resume Writing":[616],"Russian Translation":[228],"Spanish Translation":[232],"Transcription":[505],"Web Content Writing":[802],"Writing Services":[204]}},"Pokemon Expert Services":{"icon_url":"\/media\/native\/signup\/tt_lessons_icon.png","percentage":0.046,"sentenceTaxonym":"Pokémon expert","services":{"Pokémon Expert":[1665],"Chauffeur":[1306],"Personal Training":[12],"Dog Training, Private Lessons":[1148]}}});
        angular.module("ProValueApp")
            .constant("metacategories", [{"title":"Home","icon":"#thumbprinticon-category-group--home-improvement_48","open":false,"subMetas":["Inspections","Furniture","Accessibility Construction and Remodels","Carpentry and Woodworking","General Contractor","Home Theater","Doors","Architectural and Engineering Services","Windows","Moving","Design & Decor","Heating & Cooling","Additions and Remodels","Site Preparation","Lawncare","Concrete\/Cement\/Asphalt","Appliances","Tiling","Electrical","Painting","Roofing","Home Damage Prevention\/Repair","Walls, Framing, and Stairs","Material Processing","Plumbing","Siding","Pools, Hot Tubs and Spas","Landscaping","Home Services","Lighting","Outdoor Structures","Security and Damage Prevention\/Repair","Cleaning","Gutters","Flooring"]},{"title":"Events","icon":"#thumbprinticon-category-group--events_48","open":false,"subMetas":["Wedding","Dance Entertainment","Food","Entertainment Services","Driver","Getting Ready","Party Rentals","Videography","Planning","Event Staff","Events-other","Music Entertainment","Photography","Specialty Act","Event Services"]},{"title":"Lessons","icon":"#thumbprinticon-category-group--lessons_48","open":false,"subMetas":["Academic Tutoring","Cooking","Language","Music","Skill","Dancing","Sports","Fitness"]},{"title":"Wellness","icon":"#thumbprinticon-category-group--wellness_48","open":false,"subMetas":["Coaching","Nutrition","Exercise","Counseling","Beauty Services","Spa Services","Healing","Spirituality"]},{"title":"Business","icon":"#thumbprinticon-category-group--business_48","open":false,"subMetas":["Data and IT Management","Engineering & Software Development","HR & Administrative Support","Sales & Marketing","Finance & Accounting","Writing and Translation","Legal","Advisory & Consulting","Business-other","Design & Creative"]},{"title":"Pets","icon":"#thumbprinticon-category-group--pets_48","open":false,"subMetas":["Pets"]}]);
           angular.bootstrap(angular.element('body'), ['ProValueApp', 'auraComponents']);
       });
    </script>-->