<!-- CONTACT Section -->
<section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16 scroll-fade">
            <h2 class="font-display font-bold text-red-800 text-4xl md:text-5xl mb-4">Hubungi Kami</h2>
            <p class="text-gray-600 text-lg">Kami siap mendengarkan kebutuhan bisnis Anda</p>
            <div class="w-24 h-1 bg-linear-to-r from-blue-600 to-teal-600 mx-auto mt-6"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Contact Info 1 -->
            <div class="p-8 bg-linear-to-br from-blue-10 to-blue-100 rounded-xl scroll-fade hover:shadow-lg transition">
                <div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <span class="text-2xl">📍</span>
                </div>
                <h3 class="font-bold text-xl mb-3">Lokasi</h3>
                <p class="text-gray-700">
                    Jl. Elang laut. 123<br>
                    Jakarta Barat 11730<br>
                    Indonesia
                </p>
            </div>
            
            <!-- Contact Info 2 -->
            <div class="p-8 bg-linear-to-br from-teal-50 to-teal-100 rounded-xl scroll-fade hover:shadow-lg transition">
                <div class="w-16 h-16 bg-teal-600 rounded-lg flex items-center justify-center mb-6">
                    <span class="text-2xl">📞</span>
                </div>
                <h3 class="font-bold text-xl mb-3">Telepon</h3>
                <p class="text-gray-700">
                    +62 895-3213-48641<br>
                    +62 895-3213-48641<br>
                    Senin - Jumat, 09:00 - 18:00
                </p>
            </div>
            
            <!-- Contact Info 3 -->
            <div class="p-8 bg-linear-to-br from-blue-50 to-blue-100 rounded-xl scroll-fade hover:shadow-lg transition">
                <div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <span class="text-2xl">✉️</span>
                </div>
                <h3 class="font-bold text-xl mb-3">Email</h3>
                <p class="text-gray-700">
                    agusraha66@gmail.com<br>
                    nusanext@gmail.com<br>
                    Respon dalam 24 jam
                </p>
            </div>
        </div>
        
        <!-- Contact Form -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Form -->
            <div class="scroll-fade">
                <h3 class="font-display font-bold text-3xl mb-8">Kirim Pesan Anda</h3>
                
                <form class="space-y-6" id="contactForm">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap *</label>
                        <input 
                            type="text" 
                            name="name" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition"
                            placeholder="nusaNext"
                        >
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Email *</label>
                        <input 
                            type="email" 
                            name="email" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition"
                            placeholder="nusanext@gmail.com"
                        >
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">No. Telepon</label>
                        <input 
                            type="tel" 
                            name="phone"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition"
                            placeholder="+62 895 3213 48641"
                        >
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Subjek *</label>
                        <input 
                            type="text" 
                            name="subject" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition"
                            placeholder="Kebutuhan project saya"
                        >
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Pesan *</label>
                        <textarea 
                            name="message" 
                            rows="5" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition resize-none"
                            placeholder="Tuliskan pesan Anda di sini..."
                        ></textarea>
                    </div>
                    
                    <button 
                        type="submit"
                        class="w-full border-2 text-black font-semibold py-3 px-8 rounded-lg hover:shadow-lg transform hover:scale-105 transition"
                    >
                        Kirim Pesan
                    </button>
                </form>
            </div>
            
            <!-- Map or Additional Info -->
            <div class="scroll-fade">
                <div class="bg-linear-to-br from-blue-50 to-teal-50 rounded-2xl p-8 h-full flex flex-col justify-center">
                    <h3 class="font-display font-bold text-2xl mb-6">Jam Operasional</h3>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex justify-between items-center pb-4 border-b border-gray-300">
                            <span class="text-gray-700 font-semibold">Senin - Jumat</span>
                            <span class="text-gray-600">09:00 - 18:00</span>
                        </div>
                        <div class="flex justify-between items-center pb-4 border-b border-gray-300">
                            <span class="text-gray-700 font-semibold">Sabtu</span>
                            <span class="text-gray-600">10:00 - 16:00</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700 font-semibold">Minggu</span>
                            <span class="text-gray-600">Tutup</span>
                        </div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl">
                        <h4 class="font-bold text-lg mb-4">Respons Cepat</h4>
                        <p class="text-gray-600 mb-4">
                            Kami berkomitmen untuk merespon setiap inquiry dalam waktu maksimal 24 jam kerja.
                        </p>
                        <div class="flex items-center space-x-3">
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            <span class="text-green-600 font-semibold">Saat ini kami online</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = {
                name: formData.get('name'),
                email: formData.get('email'),
                phone: formData.get('phone'),
                subject: formData.get('subject'),
                message: formData.get('message')
            };
            
            // Log data (replace dengan actual form submission)
            console.log('Form Data:', data);
            
            // Show success message
            alert('Terima kasih! Pesan Anda telah terkirim. Kami akan menghubungi Anda segera.');
            
            // Reset form
            this.reset();
        });
    }
</script>