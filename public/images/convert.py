import os
from PIL import Image

def convert_images_to_webp(input_folder):
    # Mengiterasi semua file dan folder di dalam input_folder
    for root, _, files in os.walk(input_folder):
        for filename in files:
            if filename.lower().endswith(('.jpg', '.jpeg', '.png')):
                file_path = os.path.join(root, filename)
                image = Image.open(file_path)

                # Membuat nama file output dengan ekstensi .webp
                output_filename = os.path.splitext(filename)[0] + '.webp'
                output_path = os.path.join(root, output_filename)

                # Mengkonversi dan menyimpan gambar dalam format WebP
                image.save(output_path, 'webp')
                print(f'Converted {filename} to {output_filename}')

# Ganti 'path/to/your/folder' dengan path ke folder yang ingin Anda proses
convert_images_to_webp('./')
