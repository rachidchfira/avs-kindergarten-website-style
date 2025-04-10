"use client"

import { useLanguage } from "@/contexts/language-context"
import Image from "next/image"
import { Facebook, Mail, Phone } from "lucide-react"

export default function TeachersPage() {
  const { t } = useLanguage()

  const teachers = [
    {
      id: 1,
      name: "ANNA SMITH",
      role: "GIÁO VIÊN",
      nationality: "NATIONALITY TỪ USA",
      qualifications: "Master of Early Childhood Education",
      experience: "10+ years teaching experience",
      image: "/placeholder.svg?height=300&width=300",
    },
    {
      id: 2,
      name: "MARIA JOHNSON",
      role: "GIÁO VIÊN",
      nationality: "NATIONALITY TỪ UK",
      qualifications: "Bachelor of Education",
      experience: "8 years teaching experience",
      image: "/placeholder.svg?height=300&width=300",
    },
    {
      id: 3,
      name: "DAVID WILSON",
      role: "GIÁO VIÊN",
      nationality: "NATIONALITY TỪ CANADA",
      qualifications: "TESOL Certified",
      experience: "5 years teaching experience",
      image: "/placeholder.svg?height=300&width=300",
    },
    {
      id: 4,
      name: "SOPHIA LEE",
      role: "GIÁO VIÊN",
      nationality: "NATIONALITY TỪ AUSTRALIA",
      qualifications: "Bachelor of Arts in Education",
      experience: "7 years teaching experience",
      image: "/placeholder.svg?height=300&width=300",
    },
    {
      id: 5,
      name: "MICHAEL BROWN",
      role: "GIÁO VIÊN",
      nationality: "NATIONALITY TỪ USA",
      qualifications: "CELTA Certified",
      experience: "6 years teaching experience",
      image: "/placeholder.svg?height=300&width=300",
    },
    {
      id: 6,
      name: "EMMA DAVIS",
      role: "GIÁO VIÊN",
      nationality: "NATIONALITY TỪ UK",
      qualifications: "Master of Education",
      experience: "9 years teaching experience",
      image: "/placeholder.svg?height=300&width=300",
    },
    {
      id: 7,
      name: "JAMES TAYLOR",
      role: "GIÁO VIÊN",
      nationality: "NATIONALITY TỪ CANADA",
      qualifications: "Bachelor of Education",
      experience: "5 years teaching experience",
      image: "/placeholder.svg?height=300&width=300",
    },
    {
      id: 8,
      name: "OLIVIA MARTIN",
      role: "GIÁO VIÊN",
      nationality: "NATIONALITY TỪ AUSTRALIA",
      qualifications: "TESOL Certified",
      experience: "7 years teaching experience",
      image: "/placeholder.svg?height=300&width=300",
    },
  ]

  return (
    <div>
      <div className="bg-primary text-white py-16">
        <div className="container mx-auto px-4 text-center">
          <h1 className="text-4xl font-bold mb-4">{t("teachers.page.title")}</h1>
          <p className="text-xl">{t("teachers.page.subtitle")}</p>
        </div>
      </div>

      <div className="py-16">
        <div className="container mx-auto px-4">
          <div className="grid md:grid-cols-4 gap-6">
            {teachers.map((teacher) => (
              <div key={teacher.id} className="bg-white rounded-lg overflow-hidden shadow-md">
                <div className="relative h-64 w-full">
                  <Image src={teacher.image || "/placeholder.svg"} alt={teacher.name} fill className="object-cover" />
                </div>
                <div className="p-4">
                  <h3 className="font-bold text-primary">{teacher.name}</h3>
                  <p className="text-gray-500 mb-2">{teacher.nationality}</p>
                  <p className="text-primary-light">{teacher.role}</p>

                  <div className="mt-4 pt-4 border-t border-gray-100">
                    <p className="text-sm text-gray-600">
                      <span className="font-medium text-primary">{t("teachers.qualifications")}:</span>{" "}
                      {teacher.qualifications}
                    </p>
                    <p className="text-sm text-gray-600">
                      <span className="font-medium text-primary">{t("teachers.experience")}:</span> {teacher.experience}
                    </p>
                  </div>

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
      </div>
    </div>
  )
}
