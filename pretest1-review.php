<?php
    require_once('config-students.php');
    session_start();
    $type = isset($_SESSION['ebyrysUserLogin']['type']) ? $_SESSION['ebyrysUserLogin']['type'] : '';
    $student_id = $type == 'student' ? $_SESSION['ebyrysUserLogin']['id'] : $_POST['student_id'];
    $pretest = '';
    $sql = 'SELECT * FROM pretest1 WHERE student_id = :id';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $student_id);
    $result = $stmt->execute();
    if($result){
        $pretest = $stmt->fetch(PDO::FETCH_ASSOC);
    }else{
        echo 'error';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type="radio"]{
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }
        label{
            margin-left: 5px;
        }

        .input-section{
            margin-bottom: 20px;
        }
        
        .error{
            display: none;
            color: red;
        }

        #back{
            font-weight: bold;
            border: 1px solid grey;
            background: linear-gradient(to bottom, #ff944c 0%, #ff944c 100%);
            color: white;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <div class="container-fluid mt-5 w-75 p-4 mb-4" style="background-color: white;">
        <button class="btn" id="back">Geri</button>
        <h2 class="form-header text-center mb-3">Basınç Ülserlerini Önlemeye Yönelik Tutum Ölçeği</h2>

    <div class="input-section">
        <h5 class="username-label">1.Basınç ülserlerini önlemeye yönelik becerilerime güveniyorum.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly agree" name="ulcer_prevention_confidence">
            <label for="strongly agree">Kesinlikle Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="agree" name="ulcer_prevention_confidence">
            <label for="agree">Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="disagree" name="ulcer_prevention_confidence">
            <label for="strongly agree">katılmıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly disagree" name="ulcer_prevention_confidence">
            <label for="strongly agree">Kesinlikle katılmıyorum</label>
        </div>
    </div>
   
    <div class="input-section">
        <h5 class="username-label">2.Basınç ülserlerini önlemek konusunda iyi eğitimliyim.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly agree" name="ulcer_prevention_training">
            <label for="strongly agree">Kesinlikle Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="agree" name="ulcer_prevention_training">
            <label for="agree">Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="disagree" name="ulcer_prevention_training">
            <label for="strongly agree">katılmıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly disagree" name="ulcer_prevention_training">
            <label for="strongly agree">Kesinlikle katılmıyorum</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">3.	Basınç ülserlerinin önlenmesi oldukça zordur. Diğer hemşireler bu konuda benden daha iyidir.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly agree" name="ulcer_prevention_difficulty">
            <label for="strongly agree">Kesinlikle Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="agree" name="ulcer_prevention_difficulty">
            <label for="agree">Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="disagree" name="ulcer_prevention_difficulty">
            <label for="strongly agree">katılmıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly disagree" name="ulcer_prevention_difficulty">
            <label for="strongly agree">Kesinlikle katılmıyorum</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">4.	Basınç ülserlerini önlemek çok fazla dikkat gerektirir.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly agree" name="ulcer_prevention_attention">
            <label for="strongly agree">Kesinlikle Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="agree" name="ulcer_prevention_attention">
            <label for="agree">Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="disagree" name="ulcer_prevention_attention">
            <label for="strongly agree">katılmıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly disagree" name="ulcer_prevention_attention">
            <label for="strongly agree">Kesinlikle katılmıyorum</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">5.	Basınç ülserinin önlenmesi o kadar önemli değildir.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly agree" name="ulcer_prevention_importance">
            <label for="strongly agree">Kesinlikle Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="agree" name="ulcer_prevention_importance">
            <label for="agree">Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="disagree" name="ulcer_prevention_importance">
            <label for="strongly agree">katılmıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly disagree" name="ulcer_prevention_importance">
            <label for="strongly agree">Kesinlikle katılmıyorum</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">6.	Basınç ülserinin önlenmesi bir öncelik olmalıdır.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly agree" name="ulcer_prevention_priority">
            <label for="strongly agree">Kesinlikle Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="agree" name="ulcer_prevention_priority">
            <label for="agree">Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="disagree" name="ulcer_prevention_priority">
            <label for="strongly agree">katılmıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly disagree" name="ulcer_prevention_priority">
            <label for="strongly agree">Kesinlikle katılmıyorum</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">7.Basınç ülseri hastaya neredeyse hiç rahatsızlık vermez.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly agree" name="ulcer_prevention_discomfort">
            <label for="strongly agree">Kesinlikle Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="agree" name="ulcer_prevention_discomfort">
            <label for="agree">Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="disagree" name="ulcer_prevention_discomfort">
            <label for="strongly agree">katılmıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly disagree" name="ulcer_prevention_discomfort">
            <label for="strongly agree">Kesinlikle katılmıyorum</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">8.Basınç ülserlerinin hasta üzerine olan etkisi abartılmamalıdır.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly agree" name="ulcer_prevention_exagerration">
            <label for="strongly agree">Kesinlikle Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="agree" name="ulcer_prevention_exagerration">
            <label for="agree">Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="disagree" name="ulcer_prevention_exagerration">
            <label for="strongly agree">katılmıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly disagree" name="ulcer_prevention_exagerration">
            <label for="strongly agree">Kesinlikle katılmıyorum</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">9.	Basınç ülserlerinin toplum üzerine olan ekonomik etkisi abartılmamalıdır.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly agree" name="ulcer_prevention_economy">
            <label for="strongly agree">Kesinlikle Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="agree" name="ulcer_prevention_economy">
            <label for="agree">Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="disagree" name="ulcer_prevention_economy">
            <label for="strongly agree">katılmıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly disagree" name="ulcer_prevention_economy">
            <label for="strongly agree">Kesinlikle katılmıyorum</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">10.	Hastamda basınç ülseri gelişirse kendimi sorumlu hissetmem.	</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly agree" name="ulcer_prevention_responsibility">
            <label for="strongly agree">Kesinlikle Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="agree" name="ulcer_prevention_responsibility">
            <label for="agree">Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="disagree" name="ulcer_prevention_responsibility">
            <label for="strongly agree">katılmıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly disagree" name="ulcer_prevention_responsibility">
            <label for="strongly agree">Kesinlikle katılmıyorum</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">11.	Yüksek riskli hastalarda basınç ülserleri önlemede önemli bir role sahibim.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly agree" name="ulcer_prevention_role">
            <label for="strongly agree">Kesinlikle Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="agree" name="ulcer_prevention_role">
            <label for="agree">Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="disagree" name="ulcer_prevention_role">
            <label for="strongly agree">katılmıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly disagree" name="ulcer_prevention_role">
            <label for="strongly agree">Kesinlikle katılmıyorum</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">12.	Yüksek riskli hastalarda basınç ülserleri önlenebilir.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly agree" name="ulcer_prevention_highrisk">
            <label for="strongly agree">Kesinlikle Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="agree" name="ulcer_prevention_highrisk">
            <label for="agree">Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="disagree" name="ulcer_prevention_highrisk">
            <label for="strongly agree">katılmıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly disagree" name="ulcer_prevention_highrisk">
            <label for="strongly agree">Kesinlikle katılmıyorum</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">13.	Basınç ülserleri asla önlenemez.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly agree" name="ulcer_prevention_ability">
            <label for="strongly agree">Kesinlikle Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="agree" name="ulcer_prevention_ability">
            <label for="agree">Katılıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="disagree" name="ulcer_prevention_ability">
            <label for="strongly agree">katılmıyorum</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" disabled value="strongly disagree" name="ulcer_prevention_ability">
            <label for="strongly agree">Kesinlikle katılmıyorum</label>
        </div>
    </div>
    </div>
</body>

<script>

    var teacher = <?php echo isset($_POST['student_id']); ?>;
    console.log(typeof <?php echo isset($_POST['student_id']); ?>);    
    $('#back').click(function (e) { 
        e.preventDefault();
        if(teacher){
            $('#content').load('students-info.php');
        } else {
            $('#content').load('course.php');
        }
    });
    var pretest = <?php echo json_encode($pretest); ?>;
    if(pretest === ''){
        alert('You have not submitted the pretest yet');
    }
    else{
    $('input[name="ulcer_prevention_confidence"][value="'+pretest['ulcer_prevention_confidence']+'"]').prop('checked', true);
    $('input[name="ulcer_prevention_training"][value="'+pretest['ulcer_prevention_training']+'"]').prop('checked', true);
    $('input[name="ulcer_prevention_difficulty"][value="'+pretest['ulcer_prevention_difficulty']+'"]').prop('checked', true);
    $('input[name="ulcer_prevention_attention"][value="'+pretest['ulcer_prevention_attention']+'"]').prop('checked', true);
    $('input[name="ulcer_prevention_importance"][value="'+pretest['ulcer_prevention_importance']+'"]').prop('checked', true);
    $('input[name="ulcer_prevention_priority"][value="'+pretest['ulcer_prevention_priority']+'"]').prop('checked', true);
    $('input[name="ulcer_prevention_discomfort"][value="'+pretest['ulcer_prevention_discomfort']+'"]').prop('checked', true);
    $('input[name="ulcer_prevention_exagerration"][value="'+pretest['ulcer_prevention_exagerration']+'"]').prop('checked', true);
    $('input[name="ulcer_prevention_economy"][value="'+pretest['ulcer_prevention_economy']+'"]').prop('checked', true);
    $('input[name="ulcer_prevention_responsibility"][value="'+pretest['ulcer_prevention_responsibility']+'"]').prop('checked', true);
    $('input[name="ulcer_prevention_role"][value="'+pretest['ulcer_prevention_role']+'"]').prop('checked', true);
    $('input[name="ulcer_prevention_highrisk"][value="'+pretest['ulcer_prevention_highrisk']+'"]').prop('checked', true);
    $('input[name="ulcer_prevention_ability"][value="'+pretest['ulcer_prevention_ability']+'"]').prop('checked', true);
}
</script>
</html>