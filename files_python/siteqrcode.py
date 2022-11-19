
import qrcode

site = "https://drive.google.com/file/d/1pHydbV5o7dofR8oyNUIayA1hMd2Ato0c/view?usp=share_link"
cor = [('white',  'black')]
qr = qrcode.QRCode(
            version=1,
            error_correction=qrcode.constants.ERROR_CORRECT_L,
            box_size=5,
            border=5
        )
qr.add_data(site)
img = qr.make_image(fill_color=cor[0][1],back_color=cor[0][0])
img.save('site.png')








