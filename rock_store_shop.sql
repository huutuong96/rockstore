-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2023 lúc 03:13 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `rock_store_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh_san_pham`
--

CREATE TABLE `anh_san_pham` (
  `id` int(9) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `hinh_1` varchar(100) NOT NULL,
  `hinh_2` varchar(100) NOT NULL,
  `hinh_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `anh_san_pham`
--

INSERT INTO `anh_san_pham` (`id`, `hinh`, `hinh_1`, `hinh_2`, `hinh_3`) VALUES
(1, 'product-1.jpg', 'product-1.1.jpg', 'product-1.2.jpg', 'product-1.3.jpg'),
(2, 'product-2.jpg', 'product-2.1.jpg', 'product-2.2.jpg', 'product-2.3.jpg'),
(3, 'product-3.jpg', 'product-3.1.jpg', 'product-3.2.jpg', 'product-3.3.jpg'),
(4, 'product-4.jpg', 'product-4.1.jpg', 'product-4.2.jpg', 'product-4.3.jpg'),
(5, 'product-5.jpg', 'product-5.1.jpg', 'product-5.2.jpg', 'product-5.3.jpg'),
(6, 'product-6.jpg', 'product-6.1.jpg', 'product-6.2.jpg', 'product-6.3.jpg'),
(7, 'product-7.jpg', 'product-7.1.jpg', 'product-7.2.jpg', 'product-7.3.jpg'),
(8, 'product-8.jpg', 'product-8.1.jpg', 'product-8.2.jpg', 'product-8.3.jpg'),
(9, 'product-9.jpg', 'product-9.1.jpg', 'product-9.2.jpg', 'product-9.3.jpg'),
(10, 'product-10.jpg', 'product-10.1.jpg', 'product-10.2.jpg', 'product-10.3.jpg'),
(15, 'sp_11.1.jpg', 'sp_11.2.jpg', 'sp_11.3.jpg', 'sp_11.jpg'),
(22, 'sp_2.1 - Copy.jpg', 'sp_2.2 - Copy.jpg', 'sp_2.3 - Copy.jpg', 'sp_2 - Copy.jpg'),
(23, 'sp_11.1.jpg', 'sp_11.2.jpg', 'sp_11.3.jpg', 'sp_11.jpg'),
(24, 'sp_2.1.jpg', 'sp_2.2.jpg', 'sp_2.3.jpg', 'sp_2.jpg'),
(25, 'sp_2.1 - Copy.jpg', 'sp_2.1.jpg', 'sp_2.2.jpg', 'sp_2.jpg'),
(26, 'sp_2.1.jpg', '', '', ''),
(27, 'sp_2.jpg', '', '', ''),
(28, 'sp_11.3.jpg', '', '', ''),
(29, 'sp_11.1.jpg', 'sp_11.2.jpg', 'sp_11.3.jpg', 'sp_11.jpg'),
(30, 'sp_2.1 - Copy.jpg', 'sp_2.1.jpg', 'sp_2.2.jpg', 'sp_2.3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(9) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `tieu_de` varchar(100) NOT NULL,
  `noi_dung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(9) NOT NULL,
  `id_kh` int(9) NOT NULL,
  `id_sp` int(9) NOT NULL,
  `noi_dung` varchar(250) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(9) NOT NULL,
  `tieu_de` varchar(100) NOT NULL,
  `noi_dung` text NOT NULL,
  `trang_thai` bit(2) NOT NULL,
  `date` date NOT NULL,
  `id_kh` int(9) NOT NULL,
  `hinh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `tieu_de`, `noi_dung`, `trang_thai`, `date`, `id_kh`, `hinh`) VALUES
(1, 'Những Vẻ Đẹp Tự Nhiên Của Sản Phẩm Đá Quý', 'Sản phẩm đá quý luôn đem lại vẻ đẹp tự nhiên và thần bí cho không gian. Chúng ta sẽ khám phá những đặc điểm và giá trị tuyệt vời của đá quý trong bài viết này. Đá quý có một lịch sử lâu đời và luôn được coi là biểu tượng của sự quý báu và đẳng cấp. Chúng đã thu hút con người suốt hàng ngàn năm bởi vẻ đẹp tự nhiên và khả năng phản chiếu ánh sáng mà không gì khác có thể sánh kịp. Để hiểu rõ hơn về đá quý và tại sao chúng đặc biệt, hãy theo dõi bài viết này. Đá quý không chỉ là một loại khoáng sản, mà còn là một biểu tượng của sự quý phái, đẳng cấp và tinh tế. Nó được ưa chuộng trong nghệ thuật, trang sức và trang trí nội thất. Với màu sắc và ánh sáng duyên dáng, đá quý thường được sử dụng để tạo ra các sản phẩm trang sức đẹp và độc đáo. Bài viết này sẽ đưa bạn khám phá sâu hơn vào thế giới của đá quý và giải thích tại sao chúng lại đáng giá đến vậy.', b'11', '2023-10-13', 1, 'blog1.jpg'),
(3, 'Sứ Mệnh Của Đá Quý Trong Trang Sức', 'Đá quý đã có mặt trong ngành trang sức từ hàng ngàn năm và luôn đóng một vai trò quan trọng trong việc thể hiện vẻ đẹp và cá tính cá nhân. Trong bài viết này, chúng ta sẽ khám phá sứ mệnh của đá quý trong trang sức và cách chúng có thể thay đổi cảm xúc và tạo điểm nhấn cho phong cách của bạn. Những viên đá quý quý báu không chỉ là một phần của trang sức mà còn là biểu tượng của tình yêu và sự tôn trọng. Chúng biểu thị sự độc đáo và giá trị tinh thần. Bạn muốn biết thêm về cách đá quý có thể thay đổi cuộc sống của bạn? Đọc bài viết này để khám phá thêm.', b'11', '2023-10-15', 2, 'blog2.jpg'),
(9, 'Phân Biệt Đá Quý Tự Nhiên và Đá Giả Mạo', 'Sự phân biệt giữa đá quý tự nhiên và đá giả mạo có thể khá phức tạp, nhưng nó rất quan trọng khi bạn mua trang sức hoặc sản phẩm làm từ đá quý. Trong bài viết này, chúng ta sẽ học cách phân biệt giữa chúng và nhận biết đặc điểm quan trọng để đảm bảo bạn đang đầu tư vào sản phẩm thực sự có giá trị.', b'11', '2023-10-21', 2, 'blog3.jpg'),
(10, 'Lịch Sử và Truyền Thuyết Về Đá Quý', 'Đá quý đã xuất hiện trong nhiều truyền thuyết và lịch sử của các nền văn minh khác nhau trên khắp thế giới. Trong bài viết này, chúng ta sẽ khám phá lịch sử và những câu chuyện thú vị liên quan đến các loại đá quý nổi tiếng. Từ viên ruby trong vương quốc Myanmar đến viên kim cương ở Nam Phi, đá quý đã kết nối con người với những câu chuyện hấp dẫn.', b'11', '2023-10-22', 2, 'blog4.jpg'),
(11, 'Sử Dụng Đá Quý Trong Lĩnh Vực Tâm Linh', 'Đá quý không chỉ là một phần của thời trang và trang sức, mà nó còn có vai trò quan trọng trong lĩnh vực tâm linh. Trong bài viết này, chúng ta sẽ tìm hiểu về cách sử dụng đá quý để hỗ trợ tâm linh và cân bằng năng lượng. Nhiều người tin rằng đá quý có khả năng chữa bệnh và bảo vệ tâm hồn. Hãy khám phá cách bạn có thể tận dụng sức mạnh tâm linh của đá quý.', b'11', '2023-10-23', 2, 'blog5.jpg'),
(12, 'Đá Quý Trong Trang Trí Nội Thất', 'Sử dụng đá quý trong trang trí nội thất là một cách để tạo ra không gian sống độc đáo và sang trọng. Trong bài viết này, chúng ta sẽ xem xét cách bạn có thể sử dụng đá quý trong trang trí nhà cửa, từ việc làm nền tranh trang trí đến việc tạo bàn làm việc bằng đá quý. Với sự sáng tạo và ý tưởng, bạn có thể biến không gian sống của mình thành một tác phẩm nghệ thuật sử dụng đá quý.', b'11', '2023-10-24', 2, 'blog6.jpg'),
(13, 'Thị Trường Đá Quý: Cơ Hội Đầu Tư Hấp Dẫn', 'Thị trường đá quý luôn thu hút sự quan tâm của những người đầu tư thông minh. Trong bài viết này, chúng ta sẽ xem xét tại sao đầu tư vào đá quý có thể là một cơ hội hấp dẫn và những điều cần biết khi tham gia thị trường này. Đá quý không chỉ có giá trị về mặt vẻ đẹp mà còn có giá trị tài chính, và đầu tư vào đá quý có thể mang lại lợi nhuận hấp dẫn.', b'11', '2023-10-25', 2, 'blog7.jpeg'),
(14, 'Bí Mật Về Cách Chọn Đá Quý Cho Trang Sức', 'Lựa chọn đá quý cho trang sức có thể là một quyết định quan trọng. Trong bài viết này, chúng ta sẽ tiết lộ các bí mật và lời khuyên về cách chọn đá quý phù hợp với phong cách và cá tính của bạn. Khám phá cách chọn loại đá quý, màu sắc và kiểu trang sức để tạo nên một món đồ độc đáo và thể hiện cá nhân của bạn.', b'11', '2023-10-26', 1, 'blog8.jpg'),
(15, 'Thần Bí của Đá Quý: Câu Chuyện Về Sự Tích', 'Đá quý thường đi kèm với nhiều câu chuyện thần bí và sự tích. Trong bài viết này, chúng ta sẽ khám phá những câu chuyện thú vị và huyền bí về các loại đá quý nổi tiếng trên khắp thế giới. Các câu chuyện này thường liên quan đến nguồn gốc và ý nghĩa của đá quý trong văn hóa và tâm linh.', b'11', '2023-10-27', 1, 'blog9.jpg'),
(16, 'Kỹ Thuật Chế Tác Trang Sức Đá Quý', 'Chế tác trang sức đá quý là một nghệ thuật tinh xảo. Trong bài viết này, chúng ta sẽ tìm hiểu về kỹ thuật và quy trình chế tác trang sức từ đá quý, từ việc khảo sát và cắt đá đến thiết kế và tạo hình. Nếu bạn quan tâm đến nghệ thuật chế tác trang sức, bài viết này sẽ giúp bạn hiểu rõ hơn về quy trình phức tạp và công phu này.', b'11', '2023-10-28', 1, 'blog10.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_hd`
--

CREATE TABLE `chi_tiet_hd` (
  `id_dh` int(9) NOT NULL,
  `id_sp` int(9) NOT NULL,
  `so_luong` int(9) NOT NULL,
  `gia` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_hd`
--

INSERT INTO `chi_tiet_hd` (`id_dh`, `id_sp`, `so_luong`, `gia`) VALUES
(1, 7, 5, 1000000),
(1, 11, 2, 15000000),
(2, 9, 2, 8000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(9) NOT NULL,
  `ten_dm` varchar(50) NOT NULL,
  `trang_thai` varchar(50) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `ghi_chu` varchar(250) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `ten_dm`, `trang_thai`, `hinh`, `ghi_chu`, `link`) VALUES
(1, 'cây đá', 'show lên banner', 'cay_da.jpg', 'những thế cây bonsai đẹp được làm từ những loại đá quý tự nhiên khác nhau', 'cay_da'),
(2, 'tượng đá', 'show lên banner', 'tuong_da.png', 'nhữn tác phẩm tượng đá được tạc ra từ những viên đá quý nguyên khối', 'tuong_da'),
(3, 'vòng tay', 'show lên banner', 'vong_tay.png', 'những chiếc vòng tay nhiều màu rực rỡ được làm ra từ những loại đá quý nhiều màu khác nhau', 'vong_tay'),
(4, 'vòng cổ', 'show lên banner', 'vong_co.jpg', 'những chiếc vòng cổ lấp lánh đầy màu sắc tự nhiên từ những dòng đá quý khác nhau', 'vong_co'),
(5, 'nhẫn', 'show lên banner', 'nhan.jpg', 'nhẫn đá tượng trưng cho sự may mắn và lịch lãm, hãy chọn cho mình chiếc nhẫn phù hợp với bạn nào ', 'nhan'),
(10, 'iphon 8', 'tạm ngưng', 'th.jpg', 'hữu tường rákdflkdslf', 'huu_tuong'),
(11, 'nhap', 'tạm ngưng', 'sp_11.3.jpg', 'fdsfdsfd', 'sdfsdfds');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(9) NOT NULL,
  `id_kh` int(9) NOT NULL,
  `ngay_xuat` date NOT NULL,
  `trang_thai` bit(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id`, `id_kh`, `ngay_xuat`, `trang_thai`) VALUES
(1, 1, '2023-09-12', b'01'),
(2, 1, '2023-09-12', b'01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(9) NOT NULL,
  `ho_ten` varchar(50) DEFAULT NULL,
  `ten_dang_nhap` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `chuc_vu` bit(2) NOT NULL,
  `dia_chi` varchar(100) DEFAULT NULL,
  `sdt` varchar(10) DEFAULT NULL,
  `trang_thai` bit(2) NOT NULL,
  `hinh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ho_ten`, `ten_dang_nhap`, `mat_khau`, `email`, `chuc_vu`, `dia_chi`, `sdt`, `trang_thai`, `hinh`) VALUES
(1, 'nguyễn hữu tường', 'tường kà', '123', 'tuongka.@gmail.com', b'01', 'quận 12 tp Hồ Chí Minh', '0123456789', b'01', 'user.jpg'),
(2, 'nguyễn hữu tường cà', 'con ga', '123', 'conga@gmail.com', b'00', 'quận 12,thành phố hồ chí minh', '9999999999', b'01', 'user.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_da`
--

CREATE TABLE `loai_da` (
  `id` int(11) NOT NULL,
  `ten_da` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_da`
--

INSERT INTO `loai_da` (`id`, `ten_da`) VALUES
(1, 'Thạch Anh'),
(2, 'Hoàng Long'),
(3, 'San hô'),
(4, 'Ruby'),
(5, 'Phỉ thúy'),
(6, 'Hổ phách');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `panpage`
--

CREATE TABLE `panpage` (
  `id` int(9) NOT NULL,
  `ten_mxh` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `hinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `panpage`
--

INSERT INTO `panpage` (`id`, `ten_mxh`, `link`, `hinh`) VALUES
(1, 'facebook', '', 'insta-1.jpg'),
(2, 'instagram', '', 'insta-2.jpg'),
(3, 'twitter', '', 'insta-3.jpg'),
(4, 'facebook', '', 'insta-4.jpg'),
(5, 'instagram', '', 'insta-5.jpg'),
(6, 'twitter', '', 'insta-6.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(9) NOT NULL,
  `id_dm` int(9) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `don_gia` int(10) NOT NULL,
  `giam_gia` int(2) NOT NULL,
  `hinh` int(9) NOT NULL,
  `so_luot_xem` int(4) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `sao_danh_gia` int(1) DEFAULT NULL,
  `chat_lieu` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `id_dm`, `ten_sp`, `don_gia`, `giam_gia`, `hinh`, `so_luot_xem`, `mo_ta`, `sao_danh_gia`, `chat_lieu`) VALUES
(1, 1, 'Cây Đào Tiên Thạch Anh Hồng 108 Quả', 20000000, 10, 1, 0, 'Bạn đang muốn mua cây đào tiên 108 quả về vừa trang trí ngôi nhà vừa phong thủy đem lại may mắn? Hiện nay trên thị trường có nhiều nơi bán cây đào tiên thạch anh hồng 108 quả kém chất lượng và giá cả mỗi nơi khác nhau. Khiến nhiều khách hàng hoang mang và lo lắng không biết mua chỗ nào cho hợp lý. Những vấn đề đấy đang làm bạn hoang mang. Thì hãy dành ra ít phút cùng joca tìm hiểu về cửa hàng bán cây đào tiên thạch anh hồng 108 quả mang lại may mắn, tài lộc và tốt cho phong thủy nhé.', 5, 1),
(2, 1, 'Cây Đào Tiên Đá Thạch Anh Hồng 18 Quả', 10000000, 0, 2, 0, 'Bạn đang muốn mua cây đào tiên thạch anh hồng 18 quả về vừa trang trí ngôi nhà vừa phong thủy đem lại may mắn? Hiện nay trên thị trường có nhiều nơi bán cây đào tiên thạch anh hồng 18 quả kém chất lượng và giá cả mỗi nơi khác nhau. Khiến nhiều khách hàng hoang mang và lo lắng không biết mua chỗ nào cho hợp lý. Những vấn đề đấy đang làm bạn hoang mang. Thì hãy dành ra ít phút cùng joca tìm hiểu về cửa hàng bán cây đào tiên thạch anh hồng 18 quả mang lại may mắn, tài lộc và tốt cho phong thủy nhé.', 5, 1),
(3, 1, 'Cây Hồ Lô Đá Ngọc Hoàng Long', 15000000, 0, 3, 0, 'Bầu Hồ Lô là một trong những loại quả rất đặc biệt. Đặc biệt từ kiểu dáng, công dụng cho đến ý nghĩa thần thoại từ xa xưa và ý nghĩa phong thủy. Cây hồ lô đá ngọc hoàng long giúp khai vận, chiêu tài lộc, công danh thuận lợi,…', 5, 2),
(4, 3, 'Vòng tay đá san hô 108 hạt', 2000000, 0, 5, 0, 'Vòng tay đá san hô 108 hạt là một món trang sức tinh xảo và độc đáo, mang trong mình sự kết hợp hoàn hảo giữa sự tinh tế của thiết kế và sức mạnh tinh thần của đá san hô. Với 108 hạt san hô tự nhiên, sản phẩm này không chỉ là một chiếc vòng tay thời trang mà còn là một công cụ hữu ích cho các mô hình tâm linh và thiền định.', 5, 3),
(5, 3, 'vòng tay phỉ thúy vip', 23000000, 0, 4, 0, 'Vòng tay phỉ thúy là một món trang sức độc đáo và quý báu, được làm từ phỉ thúy tự nhiên - một loại khoáng sản giá trị với vẻ đẹp tự nhiên và tinh tế.Phỉ thúy là một loại khoáng sản hữu ích có nguồn gốc từ xác thực thực vật cổ đại. Chất liệu này được đánh giá cao vì vẻ đẹp tự nhiên và màu sắc độc đáo của nó. Mỗi viên phỉ thúy là một tác phẩm nghệ thuật thiên nhiên, với màu sắc đa dạng từ màu trắng, xanh, đỏ, vàng đến màu nâu.', 5, 5),
(7, 4, 'Baby baltic hổ phách vòng cổ trẻ em', 7000000, 0, 6, 0, 'Vòng cổ baby Baltic hổ phách được làm từ hổ phách tự nhiên, một loại hổ phách có nguồn gốc từ cây pines cổ xưa. Hổ phách này chứa axit succinic, một hợp chất tự nhiên có khả năng giảm viêm nhiễm và đau rát. Được biết đến với khả năng tự nhiên làm dịu sự không thoải mái của răng mọc đầu tiên, vòng cổ baby Baltic hổ phách là sự lựa chọn an toàn và tự nhiên cho bé.', 5, 6),
(8, 5, 'nhẫn thạch anh đen', 5000000, 0, 7, 0, ' Nhẫn đá đen thường được làm từ các loại đá quý màu đen tự nhiên, như đá onyx, thạch anh đen, hoặc đá thạch nhũ. Đá đen có vẻ đẹp độc đáo và quý phái, tạo nên sự tinh tế cho sản phẩm.Nhẫn đá đen có thể có nhiều thiết kế khác nhau, từ nhẫn đơn giản đến những mẫu có hoa văn phức tạp hoặc đính đá quý khác nhau. Thiết kế của nhẫn thường được lựa chọn dựa trên phong cách và sở thích cá nhân của người đeo.', 5, 1),
(9, 5, 'Nhân bac bọc phỉ thúy', 8000000, 0, 8, 0, 'Nhẫn bạc bọc phỉ thúy là một món trang sức đẹp và sang trọng, kết hợp giữa sự quý báu của phỉ thúy tự nhiên và vẻ lấp lánh của bạc. Nhẫn này được làm từ bạc 925, một loại bạc có chứa ít nhất 92.5% bạc tinh khiết, cùng với lớp phỉ thúy tự nhiên. Phỉ thúy là một loại khoáng sản giá trị, với màu sắc và vẻ đẹp độc đáo, được đặc biệt bọc lớp bạc tạo nên một món trang sức độc đáo.', 5, 5),
(10, 2, 'Tượng ông thần tài cưỡi thiềm thử', 54000000, 50, 9, 0, 'Ông Thần Tài cưỡi thiềm là một biểu tượng tượng trưng về sự giàu có, tài lộc, và thịnh vượng trong văn hóa Á Đông. Sử dụng đá hoàn long (hoặc còn gọi là đá phong thủy) để làm hình ông Thần Tài cưỡi thiềm là một ý tưởng sáng tạo và phù hợp để mang đến may mắn và tài lộc trong không gian của bạn.', 5, 2),
(11, 2, 'cá koi nhiều màu', 500000, 0, 10, 0, 'Cá Koi là một loài cá đặc biệt và quý hiếm trong văn hóa Á Đông, thường được liên kết với tình yêu, may mắn, và sự thành công. Sử dụng đá thạch anh để tạo ra hình ảnh cá Koi là một ý tưởng sáng tạo và có ý nghĩa phong thủy.Cá Koi là biểu tượng của sự kiên nhẫn, sức mạnh, và sự vượt qua khó khăn trong văn hóa Á Đông. Nó thường được coi là một biểu tượng của sự thành công và may mắn. Sản phẩm cá Koi làm từ đá thạch anh có thể đặt trong ngôi nhà hoặc nơi làm việc để tạo điểm nhấn và mang lại sự may mắn và tích cực.', 5, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh_san_pham`
--
ALTER TABLE `anh_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kh-bl` (`id_kh`),
  ADD KEY `sp_bl` (`id_sp`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_kh` (`id_kh`);

--
-- Chỉ mục cho bảng `chi_tiet_hd`
--
ALTER TABLE `chi_tiet_hd`
  ADD PRIMARY KEY (`id_dh`,`id_sp`),
  ADD KEY `ct_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dh-kh` (`id_kh`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_da`
--
ALTER TABLE `loai_da`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `panpage`
--
ALTER TABLE `panpage`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sp_dm` (`id_dm`),
  ADD KEY `hinh_hinhanh` (`hinh`),
  ADD KEY `chat_lieu` (`chat_lieu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh_san_pham`
--
ALTER TABLE `anh_san_pham`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loai_da`
--
ALTER TABLE `loai_da`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `panpage`
--
ALTER TABLE `panpage`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `kh-bl` FOREIGN KEY (`id_kh`) REFERENCES `khach_hang` (`id`),
  ADD CONSTRAINT `sp_bl` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_kh` FOREIGN KEY (`id_kh`) REFERENCES `khach_hang` (`id`);

--
-- Các ràng buộc cho bảng `chi_tiet_hd`
--
ALTER TABLE `chi_tiet_hd`
  ADD CONSTRAINT `ct_dh` FOREIGN KEY (`id_dh`) REFERENCES `don_hang` (`id`),
  ADD CONSTRAINT `ct_sp` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `dh-kh` FOREIGN KEY (`id_kh`) REFERENCES `khach_hang` (`id`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `chat_lieu` FOREIGN KEY (`chat_lieu`) REFERENCES `loai_da` (`id`),
  ADD CONSTRAINT `hinh_hinhanh` FOREIGN KEY (`hinh`) REFERENCES `anh_san_pham` (`id`),
  ADD CONSTRAINT `sp_dm` FOREIGN KEY (`id_dm`) REFERENCES `danh_muc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
