let captchaCode = '';
let regenerateTimeout = null;
let cooldownInterval = null;

function generateCaptcha() {
    const regenerateButton = document.getElementById('regenerateButton');
    const cooldownText = document.getElementById('cooldownText');
    regenerateButton.disabled = true;
    
    const chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    captchaCode = '';
    for (let i = 0; i < 6; i++) {
        captchaCode += chars[Math.floor(Math.random() * chars.length)];
    }
    document.getElementById('captchaCode').textContent = captchaCode;

    // Start the 30-second cooldown
    if (regenerateTimeout) {
        clearTimeout(regenerateTimeout);
    }
    if (cooldownInterval) {
        clearInterval(cooldownInterval);
    }

    let timeLeft = 30;
    cooldownText.textContent = `Tunggu ${timeLeft} detik untuk generate ulang`;
    cooldownText.classList.add('visible');

    cooldownInterval = setInterval(() => {
        timeLeft--;
        if (timeLeft > 0) {
            cooldownText.textContent = `Tunggu ${timeLeft} detik untuk generate ulang`;
        } else {
            cooldownText.classList.remove('visible');
            clearInterval(cooldownInterval);
        }
    }, 1000);
    
    regenerateTimeout = setTimeout(() => {
        regenerateButton.disabled = false;
    }, 30000); // 30 seconds
}

function validateForm(event) {
    event.preventDefault();
    
    const verifyInput = document.getElementById('verify').value.toUpperCase();
    if (verifyInput !== captchaCode) {
        alert('Kode verifikasi tidak sesuai. Silakan coba lagi.');
        return false;
    }

    // Add form submission logic here
    alert('Pesan berhasil dikirim!');
    event.target.reset();
    generateCaptcha();
    return false;
}

function toggleMap() {
    const mapContainer = document.getElementById('mapContainer');
    const mapToggleIcon = document.getElementById('mapToggleIcon');
    
    mapContainer.classList.toggle('hidden');
    mapToggleIcon.classList.toggle('rotate-180');
}

// Generate initial captcha when page loads
document.addEventListener('DOMContentLoaded', generateCaptcha);