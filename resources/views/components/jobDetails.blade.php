<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-8">
                <div class="d-flex align-items-center mb-5">
                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt=""
                        style="width: 80px; height: 80px;">
                    <div class="text-start ps-4">
                        <h3 class="mb-3">Marketing Manager</h3>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                            USA</span>
                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                            $456</span>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="mb-3">Job description</h4>
                    <p>Dolor justo tempor duo ipsum accusam rebum gubergren erat. Elitr stet dolor vero clita labore
                        gubergren. Kasd sed ipsum elitr clita rebum ut sea diam tempor. Sadipscing nonumy vero labore
                        invidunt dolor sed, eirmod dolore amet aliquyam consetetur lorem, amet elitr clita et sed
                        consetetur dolore accusam. Vero kasd nonumy justo rebum stet. Ipsum amet sed lorem sea magna.
                        Rebum vero dolores dolores elitr vero dolores magna, stet sea sadipscing stet et. Est voluptua
                        et sanctus at sanctus erat vero sed sed, amet duo no diam clita rebum duo, accusam tempor
                        takimata clita stet nonumy rebum est invidunt stet, dolor.</p>
                    <h4 class="mb-3">Responsibility</h4>
                    <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua
                        sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore
                            gubergren</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat
                        </li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                    </ul>
                    <h4 class="mb-3">Qualifications</h4>
                    <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua
                        sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore
                            gubergren</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat
                        </li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                    </ul>
                </div>

                <div class="">
                    <h4 class="mb-4">Apply For The Job</h4>
                    <form action="{{route('applications.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" name="first_name" class="form-control" placeholder="Your First name">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" name="last_name" class="form-control" placeholder="Your Last name">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" name="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="number" name="phone" class="form-control" placeholder="Your Phone number">
                            </div>
                            {{-- <div class="col-12 col-sm-6">
                                <input type="text" class="form-control" placeholder="Portfolio Website">
                            </div> --}}

                            <div class="col-12 col-sm-6">
                                <label for="frontBill">Upload bill (Front)</label>
                                <input type="file" name="front_bill" class="form-control bg-white" id="frontBill"
                                    onchange="previewImage(this, 'frontPreview')">
                                <div class="mt-2">
                                    <img id="frontPreview" src="" alt="Front Bill Preview"
                                        style="max-width: 200px; display: none;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="backBill">Upload bill (Back)</label>
                                <input type="file" name="back_bill" class="form-control bg-white" id="backBill"
                                    onchange="previewImage(this, 'backPreview')">
                                <div class="mt-2">
                                    <img id="backPreview" src="" alt="Back Bill Preview"
                                        style="max-width: 200px; display: none;">
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="cover_letter" rows="5" placeholder="Coverletter"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                            </div>
                        </div>
                    </form>

                    <script>
                        function previewImage(input, previewId) {
                            const preview = document.getElementById(previewId);
                            const file = input.files[0];

                            if (file) {
                                const reader = new FileReader();

                                reader.onload = function(e) {
                                    preview.src = e.target.result;
                                    preview.style.display = 'block';
                                }

                                reader.readAsDataURL(file);
                            } else {
                                preview.src = '';
                                preview.style.display = 'none';
                            }
                        }

                        function previewImage(input, previewId) {
                            const preview = document.getElementById(previewId);
                            const file = input.files[0];

                            if (file) {
                                // Check if file is an image
                                if (!file.type.startsWith('image/')) {
                                    alert('Please select an image file');
                                    input.value = '';
                                    preview.style.display = 'none';
                                    return;
                                }

                                const reader = new FileReader();

                                reader.onload = function(e) {
                                    preview.src = e.target.result;
                                    preview.style.display = 'block';
                                }

                                reader.readAsDataURL(file);
                            } else {
                                preview.src = '';
                                preview.style.display = 'none';
                            }
                        }
                    </script>


                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Job Summery</h4>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 01 Jan, 2045</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 123 Position</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Full Time</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: $123 - $456</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Location: New York, USA</p>
                    <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 01 Jan, 2045</p>
                </div>
                <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Company Detail</h4>
                    <p class="m-0">Ipsum dolor ipsum accusam stet et et diam dolores, sed rebum sadipscing elitr vero
                        dolores. Lorem dolore elitr justo et no gubergren sadipscing, ipsum et takimata aliquyam et
                        rebum est ipsum lorem diam. Et lorem magna eirmod est et et sanctus et, kasd clita labore.</p>
                </div>
            </div>
        </div>
    </div>
</div>
