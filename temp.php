<?php
if ($user_online == true) {
    if ($jobexpired == true) {
        print '<button class="btn btn-primary disabled btn-hidden btn-lg collapsed"><i class="flaticon-line-icon-set-calendar"></i> This job is expired</button>';
    } else {
        if ($myrole == "employee") {
            print '<button onclick="update(this.value)" value="'.$jobid.'" class="btn btn-primary btn-hidden btn-lg collapsed"><i class="flaticon-line-icon-set-pencil"></i> Apply for this job</button>';
            print '<button onclick="redirectOnlineAssessment()" value="'.$jobid.'" class="btn btn-primary btn-hidden btn-lg collapsed"><i class="flaticon-line-icon-set-pencil"></i> Give Online Assessment</button>';
        } else {
            print '<button class="btn btn-primary disabled btn-hidden btn-lg collapsed"><i class="flaticon-line-icon-set-padlock"></i> Login as an employee to apply</button>';
        }
    }
} else {
    print '<button class="btn btn-primary disabled btn-hidden btn-lg collapsed"><i class="flaticon-line-icon-set-padlock"></i> Login to apply for this job</button>';
    print '<br><button class="btn btn-primary disabled btn-hidden btn-lg collapsed"><i class="flaticon-line-icon-set-padlock"></i> Login to Give Online Assessment</button>';
}
?>

<script>
function redirectOnlineAssessment() {
    window.location.href = 'Online-Quiz/index.php';
}
</script>
