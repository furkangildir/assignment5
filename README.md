# ASSIGNMENT 5
  
## 1. ARAŞTIRMA KONUSU (20 puan)
- Repository pattern nedir? Bir örnekle açıklayınız. (5 puan)
  *  Repository Pattern ortak olarak yaptığımız operasyonlar için tek bir class üzerinde generic olarak ayarlayıp daha sonra diğer class’larımızdaki aynı operasyonların sağlanabilmesi için oluşturabileceğimiz bir pattern’dir. Örnek vermek gerekirse, uygulamamızda Entity Framework kullanıyoruz ve 20 tablomuz yani entity’miz bulunmakta. Bizim bu 20 tablo için de Select,Insert,Update, Delete işlemlerini gerçekleştirmemiz gerekiyor. Kısa bir hesaplama ile tek bir entity için 4 metod yazmamız gerekiyor. 20 entity için 80 adet metod oluşturacağız ve aynı operasyonları gerçekleştirecek. Sadece ilgili classlar üzerinde bir değişiklik olacak. Fakat bunun hem yazımı hem de yönetimi biraz zor olacağından ve fazlasıyla iş yükü olduğundan dolayı bu işlemler için repository pattern deseni ile tek bir class üzerinden bu işlemleri gerçekleştirebiliriz. Yeni bir metod eklemek istersek de bu pattern üzerinden eklediğimiz takdirde tüm hepsi için de geçerli olacaktır. Hem de bizi iş yükünden kurtaracaktır.
- Aşağıdaki güvenlik zaafiyetlerini birer cümleyle açıklayınız: (3x5=15 puan)
- #### SQL Injection
  * Veritabanı sahibinin izni olmadan querystringler ile sorgulara müdahalede bulunup veritabanına erişerek veritabanındaki bilgileri görüntülemek şeklinde açıklanabilir.
- #### Man in the Middle
  * Man in the middle saldırısı ağda, iki bağlantı arasındaki iletişimin dinlenmesi ile çeşitli verilerin ele geçirilmesi veya iletişimi dinlemekle kalmayıp her türlü değişikliğin yapılmasını da kapsayan bir saldırı yöntemidir.
- #### Cross-Site Scripting (XSS)
  * XSS (Cross Site Scripting) script kodları üzerinden (genelde javascript) bir web sayfasına saldırı yapılmasıdır. XSS çoğunlukla tarayıcıda saklanan bilgiler olan cookielere saldırı amacı ile kullanılmaktadır.
- #### Session Hijacking
  * İki bilgisayar arasındaki geçerli TCP iletimini ele geçirme saldırısıdır.
- #### Cross-Site Request Forgery
  * Türkçe açılımı “Siteler Arası İstek Sahtekârlığı” şeklinde olan CSRF zafiyeti; web uygulamasını kullanmakta olan kullanıcıların istekleri dışında işlemler yürütülmesidir. 

## 2.	SYMFONY WEB UYGULAMASI (DOCTRINE) (80 puan)
Ders esnasında composer ile oluşturmuş olduğunuz ve Doctrine ORM içeren Symfony uygulamasını Repo’ya yükleyiniz.



