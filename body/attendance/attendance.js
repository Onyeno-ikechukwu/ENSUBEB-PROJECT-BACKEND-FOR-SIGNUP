function captureFingerprint() {
    const statusDiv = document.getElementById('status');
    statusDiv.innerHTML = "Place your finger on the scanner...";
    
    // Initialize SecuGen scanner
    const fp = new SecuGen.FP();
    fp.init().then(() => {
        return fp.capture();
    }).then((fingerprintData) => {
        statusDiv.textContent = "Fingerprint captured!";
        console.log("Fingerprint data:", fingerprintData);
        // Send to server (e.g., via fetch())
    }).catch((error) => {
        statusDiv.textContent = "Error: " + error.message;
    });
}