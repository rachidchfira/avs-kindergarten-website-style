"use client"

import { useLanguage } from "@/contexts/language-context"
import Image from "next/image"
import Link from "next/link"

export default function NewsPage() {
  const { t } = useLanguage()

  const newsItems = [
    {
      id: 1,
      title: "Summer Camp Registration Now Open",
      titleVi: "Đăng Ký Trại Hè Đã Mở",
      date: "2023-05-15",
      excerpt: "Join our exciting summer camp program filled with fun activities and learning opportunities.",
      excerptVi: "Tham gia chương trình trại hè thú vị của chúng tôi với nhiều hoạt động vui nhộn và cơ hội học tập.",
      image: "/placeholder.svg?height=300&width=500",
    },
    {
      id: 2,
      title: "New STEAM Lab Opening Ceremony",
      titleVi: "Lễ Khai Trương Phòng Thí Nghiệm STEAM Mới",
      date: "2023-04-20",
      excerpt: "We are excited to announce the opening of our new state-of-the-art STEAM laboratory.",
      excerptVi: "Chúng tôi vui mừng thông báo về việc khai trương phòng thí nghiệm STEAM hiện đại mới của chúng tôi.",
      image: "/placeholder.svg?height=300&width=500",
    },
    {
      id: 3,
      title: "Parent-Teacher Conference Schedule",
      titleVi: "Lịch Họp Phụ Huynh-Giáo Viên",
      date: "2023-03-10",
      excerpt:
        "Important information about our upcoming parent-teacher conferences and how to schedule your appointment.",
      excerptVi: "Thông tin quan trọng về các cuộc họp phụ huynh-giáo viên sắp tới và cách đặt lịch hẹn của bạn.",
      image: "/placeholder.svg?height=300&width=500",
    },
    {
      id: 4,
      title: "Annual Art Exhibition",
      titleVi: "Triển Lãm Nghệ Thuật Thường Niên",
      date: "2023-02-25",
      excerpt: "Join us for our annual art exhibition showcasing the creative talents of our young artists.",
      excerptVi:
        "Hãy tham gia cùng chúng tôi trong triển lãm nghệ thuật thường niên giới thiệu tài năng sáng tạo của các nghệ sĩ nhỏ tuổi của chúng tôi.",
      image: "/placeholder.svg?height=300&width=500",
    },
    {
      id: 5,
      title: "New English Program Launch",
      titleVi: "Ra Mắt Chương Trình Tiếng Anh Mới",
      date: "2023-01-15",
      excerpt: "We are launching a new enhanced English program with native speaking teachers.",
      excerptVi: "Chúng tôi đang ra mắt chương trình tiếng Anh nâng cao mới với giáo viên bản ngữ.",
      image: "/placeholder.svg?height=300&width=500",
    },
    {
      id: 6,
      title: "Kindergarten Graduation Ceremony",
      titleVi: "Lễ Tốt Nghiệp Mẫu Giáo",
      date: "2022-12-05",
      excerpt: "Join us to celebrate our kindergarten students as they graduate and prepare for elementary school.",
      excerptVi:
        "Tham gia cùng chúng tôi để chúc mừng các học sinh mẫu giáo khi họ tốt nghiệp và chuẩn bị cho trường tiểu học.",
      image: "/placeholder.svg?height=300&width=500",
    },
  ]

  return (
    <div>
      <div className="bg-primary text-white py-16">
        <div className="container mx-auto px-4 text-center">
          <h1 className="text-4xl font-bold mb-4">{t("news.title")}</h1>
          <p className="text-xl">{t("news.subtitle")}</p>
        </div>
      </div>

      <div className="py-16">
        <div className="container mx-auto px-4">
          <div className="grid md:grid-cols-2 gap-8">
            {newsItems.map((item) => (
              <div key={item.id} className="bg-white rounded-lg shadow-md overflow-hidden">
                <div className="relative h-48">
                  <Image src={item.image || "/placeholder.svg"} alt={item.title} fill className="object-cover" />
                </div>
                <div className="p-6">
                  <div className="text-sm text-gray-500 mb-2">{item.date}</div>
                  <h3 className="text-xl font-bold text-primary mb-2">
                    {t("language") === "vi" ? item.titleVi : item.title}
                  </h3>
                  <p className="text-gray-600 mb-4">{t("language") === "vi" ? item.excerptVi : item.excerpt}</p>
                  <Link href={`/news/${item.id}`} className="text-primary-light font-medium hover:underline">
                    {t("news.readMore")} →
                  </Link>
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
    </div>
  )
}
