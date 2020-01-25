function biodata(nama, umur) {
    const hobbies = ["ngoding", "game", "proyekan"]
    const isMarried = false
    const address = "Jl. Mustafa Daeng Bunga, Samata, Kab. Gowa, Sul-sel"
    const interestInCoding = true

    //buat objek
    let about = {
        name: nama,
        age: umur,
        address: address,
        hobbies: hobbies,
        isMarried: isMarried,
        listSchool: {
            sd: [
                {
                    name: 'SDN 286 Malombong',
                    year_in: 2005,
                    year_out: 2011,
                    major: null
                }
            ],
            smp: [
                {
                    name: 'SMPN 20 Bulukumba',
                    year_in: 2011,
                    year_out: 2014,
                    major: null
                }
            ],
            sma: [
                {
                    name: 'SMAN 5 Bulukumba',
                    year_in: 2014,
                    year_out: 2017,
                    major: null
                }
            ]
        },
        skills: {
            web: [
                {
                    skillName: 'Web Design using HTML, CSS, JavaScript & Web Dev using PHP/CodeIgniter',
                    level: 'advanced'
                }
            ],
            desktop: [
                {
                    skillName: 'Electron JS & Delphi',
                    level: 'advanced'
                }
            ],
            android: [
                {
                    skillName: 'Java, Kotlin & PWA',
                    level: 'beginner'
                }
            ]
        },
        interest_in_coding: interestInCoding
    }
    //akhir objek


    return JSON.stringify(about)
}

let hasil = biodata('Andi Irsandi', '20')

console.log(hasil)
