"use client"

import Image from "next/image"
import { Facebook, Mail, Phone } from "lucide-react"
import { useLanguage } from "@/contexts/language-context"

export default function TeachersSection() {
  const { t } = useLanguage()

  const teachers = [
    {
      id: 1,
      name: "ANNA SMITH",
      role: "GIÁO VIÊN",
      nationality: "NATIONALITY TỪ USA",
      image: "/placeholder.svg?height=300&width=300",
    },
    {
      id: 2,
      name: "MARIA JOHNSON",
      role: "GIÁO VIÊN",
      nationality: "NATIONALITY TỪ UK",
      image: "/placeholder.svg?height=300&width=300",
    },
    {
      id: 3,
      name: "DAVID WILSON",
      role: "GIÁO VIÊN",
      nationality: "NATIONALITY TỪ CANADA",
      image: "/placeholder.svg?height=300&width=300",
    },
    {
      id: 4,
      name: "SOPHIA LEE",
      role: "GIÁO VIÊN",
      nationality: "NATIONALITY TỪ AUSTRALIA",
      image: "/placeholder.svg?height=300&width=300",
    },
  ]

  return (
    <section className="py-16 bg-gray-50">
      <div className="container mx-auto px-4">
        <h2 className="section-title">{t("teachers.title")}</h2>
        <p className="text-center text-gray-600 mb-12 max-w-3xl mx-auto">{t("teachers.subtitle")}</p>

        <div className="grid md:grid-cols-4 gap-6">
          {teachers.map((teacher) => (
            <div key={teacher.id} className="bg-white rounded-lg overflow-hidden shadow-md">
              <div className="relative h-64 w-full">
                <Image src={teacher.image || "/placeholder.svg"} alt={teacher.name} fill className="object-cover" />
              </div>
              <div className="p-4 text-center">
                <h3 className="font-bold text-primary">{teacher.name}</h3>
                <p className="text-gray-500 mb-2">{teacher.nationality}</p>
                <p className="text-primary-light">{teacher.role}</p>

                <div className="flex justify-center space-x-2 mt-4">
                  <a href="#" className="bg-primary rounded-full p-2 text-white hover:bg-opacity-90">
                    <Facebook className="w-4 h-4" />
                  </a>
                  <a href="#" className="bg-black rounded-full p-2 text-white hover:bg-opacity-90">
                    <Mail className="w-4 h-4" />
                  </a>
                  <a href="#" className="bg-green-500 rounded-full p-2 text-white hover:bg-opacity-90">
                    <Phone className="w-4 h-4" />
                  </a>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  )
}
