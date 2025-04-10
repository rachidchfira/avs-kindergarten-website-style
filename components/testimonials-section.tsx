"use client"

import Image from "next/image"
import { useLanguage } from "@/contexts/language-context"

export default function TestimonialsSection() {
  const { t } = useLanguage()

  return (
    <section className="py-16">
      <div className="container mx-auto px-4">
        <h2 className="section-title">{t("testimonials.title")}</h2>

        <div className="grid md:grid-cols-3 gap-8">
          <div className="bg-white p-6 rounded-lg shadow-md">
            <div className="flex items-center mb-4">
              <Image
                src="/placeholder.svg?height=60&width=60"
                alt="Parent"
                width={60}
                height={60}
                className="rounded-full mr-4"
              />
              <div>
                <h3 className="font-bold text-primary">Nguyễn Thị Hương</h3>
                <p className="text-gray-500 text-sm">Phụ huynh học sinh</p>
              </div>
            </div>
            <p className="text-gray-600">
              "Con tôi đã học tại trường mầm non H&A Pre STEAM được 2 năm. Tôi rất hài lòng với sự phát triển của con.
              Các giáo viên rất tận tâm và chương trình học rất phù hợp với lứa tuổi của con."
            </p>
          </div>

          <div className="bg-white p-6 rounded-lg shadow-md">
            <div className="flex items-center mb-4">
              <Image
                src="/placeholder.svg?height=60&width=60"
                alt="Parent"
                width={60}
                height={60}
                className="rounded-full mr-4"
              />
              <div>
                <h3 className="font-bold text-primary">Trần Văn Minh</h3>
                <p className="text-gray-500 text-sm">Phụ huynh học sinh</p>
              </div>
            </div>
            <p className="text-gray-600">
              "Môi trường học tập tại H&A Pre STEAM rất tốt. Con tôi rất thích đến trường mỗi ngày. Đặc biệt, chương
              trình STEAM đã giúp con phát triển tư duy sáng tạo và kỹ năng giải quyết vấn đề."
            </p>
          </div>

          <div className="bg-white p-6 rounded-lg shadow-md">
            <div className="flex items-center mb-4">
              <Image
                src="/placeholder.svg?height=60&width=60"
                alt="Parent"
                width={60}
                height={60}
                className="rounded-full mr-4"
              />
              <div>
                <h3 className="font-bold text-primary">Lê Thị Mai</h3>
                <p className="text-gray-500 text-sm">Phụ huynh học sinh</p>
              </div>
            </div>
            <p className="text-gray-600">
              "Tôi đánh giá cao việc trường có giáo viên bản ngữ dạy tiếng Anh. Con tôi đã có thể giao tiếp bằng tiếng
              Anh cơ bản sau 1 năm học tại đây. Cơ sở vật chất của trường cũng rất tốt và an toàn."
            </p>
          </div>
        </div>
      </div>
    </section>
  )
}
