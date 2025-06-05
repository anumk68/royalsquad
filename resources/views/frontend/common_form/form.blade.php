<form action="{{ route('appointments') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                @error('name')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                @error('email')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input class="form-control" id="number" name="number" placeholder="Enter Number" type="text" required>
                @error('number')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input class="form-control" id="subject" name="subject" placeholder="Enter Subject" type="text" required>
                @error('subject')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <select class="form-control" name="dept" required>
                    <option value="">Select Services</option>
                    <option value="virus_malware_removal">Virus & Malware Removal</option>
                    <option value="computer_tune_ups">Computer Tune-Ups</option>
                    <option value="email_services">Email Services</option>
                    <option value="wi-fi_connectivity">WiFi Connectivity</option>
                    <option value="data_backup_services">Data Backup Services</option>
                    <option value="program_errors_crashes">Program Errors & Crashes</option>
                    <option value="microsoft_windows">Microsoft Windows</option>
                    <option value="smartphones_tablets">Smartphones & Tablets</option>
                    <option value="apple_mac_os">Apple Mac OS</option>
                    <option value="printers_multifunctions">Printers & Multifunctions</option>
                    <option value="training_guidance">Training & Guidance</option>
                    <option value="software_applications">Software Applications</option>
                    <option value="antivirus_security_software">Antivirus & Security Software</option>
                    <option value="home_networking">Home Networking</option>
                    <option value="internet_connectivity">Internet Connectivity</option>
                </select>
                @error('dept')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <select class="form-control" name="service" required>
                    <option value="">IT Services</option>
                    <option value="web_development">Web Development</option>
                    <option value="app_development">App Development</option>
                    <option value="web_agency">Web Agency</option>
                    <option value="digital_marketing">Digital Marketing</option>
                    <option value="ui_ux_design">UI/UX Design</option>
                </select>
                @error('service')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <button type="submit" name="submit" id="submit" class="btn btn-theme effect btn-sm btn-standard button_effect">
                Submit Query
            </button>
        </div>
    </div>
</form>
