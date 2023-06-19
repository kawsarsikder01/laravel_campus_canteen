<x-sg-master>
<div class="content">
            <h3>App Configuration</h3>

            <form action="">
                <div class="form-group row">
                     <x-dataentry.label>
                        App Name
                    </x-dataentry.label>
                    <div class="col-lg-10">
                    <x-dataentry.text>
                        name = "app_name"
                    </x-dataentry.text>
                    </div>
                </div>

                <div class="form-group row">
                    <x-dataentry.label>
                        Company Name
                    </x-dataentry.label>
                    <div class="col-lg-10">
                        <x-dataentry.text>
                        name = "company_name"
                        </x-dataentry.text>
                    </div>
                </div>

                <x-dataentry.phone/>

                <x-dataentry.email/>

                <x-dataentry.address/>

                <div class="form-group row">
                    <x-dataentry.label>
                        Business Address
                    </x-dataentry.label>
                    <div class="col-lg-10">
                        <x-dataentry.text>
                        name = "business_address"
                        </x-dataentry.text>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-form-label col-lg-2"></div>
                    <div class="col-lg-10 border rounded d-flex justify-content-center">
                        <img class="img-fluid" src="https://cdn.logo.com/hotlink-ok/logo-social.png" alt="" height="100px" width="100px">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">App Logo</label>
                    <div class="col-lg-10">
                        <div class="uniform-uploader"><input type="file" class="form-control-uniform" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn btn-light legitRipple" style="user-select: none;">Choose File</span></div>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-form-label col-lg-2"></div>
                    <div class="col-lg-10 border rounded d-flex justify-content-center">
                        <img class="img-fluid" src="https://w7.pngwing.com/pngs/623/978/png-transparent-brand-mode-of-transport-sky-header-blue-electronics-cloud.png" alt="" height="300px" width="auto">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Invoice Header</label>
                    <div class="col-lg-10">
                        <div class="uniform-uploader"><input type="file" class="form-control-uniform" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn btn-light legitRipple" style="user-select: none;">Choose File</span></div>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-form-label col-lg-2"></div>
                    <div class="col-lg-10 border rounded d-flex justify-content-center">
                        <img class="img-fluid" src="https://www.pngfind.com/pngs/m/10-101081_blue-footer-png-swoosh-graphic-transparent-png.png" alt="" height="300px" width="auto">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Invoice Footer</label>
                    <div class="col-lg-10">
                        <div class="uniform-uploader"><input type="file" class="form-control-uniform" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn btn-light legitRipple" style="user-select: none;">Choose File</span></div>
                    </div>
                </div>

                <x-dataentry.submit/>
                       
            </form>
        </div>
</x-sg-master>