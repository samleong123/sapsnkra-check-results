# SAPS Results Check Alternative Site
Brought to you by [samleong123](https://github.com/samleong123)


## Requirement
- Network environment of the server must be IP-Based in **Malaysia**
- PHP 7.4 and above will be recommended
- Able to access [Official site of Sistem Analisis Peperiksaan Sekolah](https://sapsnkra.moe.gov.my)

## How to Deploy 
1. Clone this repository to your web root directory with [zip](https://github.com/samleong123/sapsnkra-check-results/archive/refs/heads/main.zip) or  ``git clone https://github.com/samleong123/sapsnkra-check-results.git``
2. Extract the zip if you download it via [zip](https://github.com/samleong123/sapsnkra-check-results/archive/refs/heads/main.zip)
3. Deploy to your web root directory
4. Enable Nginx + PHP and you are good to go


## Why
This repo has been created because of the **bad UI** of the [Sistem Analisis Peperiksaan Sekolah](https://sapsnkra.moe.gov.my) 

Besides that , they will **block to show your results** if the results **was not fully key in and released** which it was very frustrating. 
They block it with inserting two JavaScript : 

```
<script language="javascript">
    var temp = "Maklumat markah pelajar masih belum lagi dikemaskini.";
    alert(temp);
</script>
<script>
    window.close();
</script>
```

The ```result.php``` will match the **body** content and ignore the **two JavaScript** and also replace the images URL to [Official site of Sistem Analisis Peperiksaan Sekolah](https://sapsnkra.moe.gov.my)

## How to use 
Prepare the details below :
1. Your School Code 
2. Your Form
3. Your Class Name
4. Your NRIC 
5. Exam Type

Head to the site where you deployed this repository , enter the details as required and hit Check Now.

## Privacy Concern
The details entered by you won't be recorded as ```result.php``` is just passing the data to SAPS's server after trim space bar and change all to capital letters. 

Browse the code [here](https://github.com/samleong123/sapsnkra-check-results/blob/main/result.php) if you have any concern about privacy.
